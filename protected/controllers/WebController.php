<?php
class WebController extends TopController{
	public $layout = '//layouts/main';
	public $defaultAction = "tejia";
	public $menu = array(
		'tejia'=>array('label'=>'今日特价','url'=>'http://tejia.jiazheng123.cn','title'=>"今日特价| 惠购网-超值单品特卖,网购省钱更省心! ",'des'=>"网聚全网最优惠的超低价折扣商品。每日千款超值商品实时更新，你最值得关注的特价促销，就在惠购网今日特价！"),
		'temai'=>array('label'=>'限时特卖','url'=>'http://temai.jiazheng123.cn',"title"=>"惠购网限时特卖，品牌特卖，正品低价限时折扣，聚全网优惠，品质保证！- 惠购网","des"=>"品牌特卖，惠购网，特卖，名品，品牌，打折，促销，品牌折扣，限时抢购，正品特卖,品牌折扣网,品牌团"),
		'shangjia'=>array('label'=>'商家大全','url'=>'http://shangjia.jiazheng123.cn',"title"=>"网店推荐/网店导航/商家大全_惠购网","des"=>"网聚全网最优惠的超低价折扣商品。每日千款超值商品实时更新，你最值得关注的特价促销，就在惠购网今日特价！"),
		'about'=>array('label'=>'关于我们','url'=>'http://about.jiazheng123.cn',"title"=>"惠购网-关于我们","des"=>"网聚全网最优惠的超低价折扣商品。每日千款超值商品实时更新，你最值得关注的特价促销，就在惠购网今日特价！"),
	);
	//public $niuren = "http://niu.haodianpu.com";
	public $niuren = "http://120.55.151.16/";
	public function init(){
		parent::init();
		ini_set('date.timezone','Asia/Shanghai');
	}

	public function actionIndex(){
		/*
		$this->layout = '//layouts/tejia';
		$this->page = !empty($_GET['page']) ? $_GET['page'] : 1;
		$this->render('tejia1'); 
		*/
		$this->redirect("/web/tejia");
	}

	public function actionTejia(){
		$this->layout = '//layouts/main';
		$tpage = $page = !empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0 ? $_GET['page'] : 1;
		if($page>2){
			$page -= 2;
		}
		$keyword = !empty($_GET['keyword']) ? $_GET['keyword'] : '';
		$price = !empty($_GET['price']) ? $_GET['price'] : 'all';
		$shop = !empty($_GET['shop']) ? $_GET['shop'] : '';
		$file = $this->niuren."/mobile/sjdp/gettejiaitem?page={$page}&keyword={$keyword}&price={$price}&shop={$shop}";
		$content = file_get_contents($file);
		$res = json_decode($content,true);
		if(empty($res)){
			$res = json_decode(substr($content,3),true);	
		}
		$pages = $res['pages'];
		$data = $res['item'];
		$ldata = array();
		for($i=0;$i<count($res['litem']);$i+=4){
			$ldata[] = array_slice($res['litem'],$i,4);	
		}
		
		$res = '';
		$command = Yii::app()->db->createCommand();
		$dao_res = $command->setText("select * from `huigou_item` where status>0")->queryAll();
		/* 前三页使用静态页面*/
		$file = "tejia";
		if($tpage<=2&&empty($keyword)&&empty($shop)){
			$start = ($tpage-1)*20;
			$sql = "select * from `huigou_item` where status=0 order by item_id limit {$start},20";
			$res = $command->setText($sql)->queryAll();
			$file = "stejia";
		}
		$this->render($file,array('data'=>$data,'ldata'=>$ldata,'pages'=>$pages,'page'=>$tpage,'res'=>$res,'dao_res'=>$dao_res));
	}

	public function actionAdmin($code="",$status=""){
		if(empty($code) || $code!="35418517"){
			$this->redirect("/web/tejia");
		}
		$item_id = isset($_GET['item_id']) ?$_GET['item_id'] : 0;
		$page = isset($_GET['p']) ? $_GET['p'] : 1;
		$status = isset($_GET['status']) ? $_GET['status'] : 0;
		$this->render("admin",array('item_id'=>$item_id,'page'=>$page,'status'=>$status));
	}
	public function actionDoAdmin(){
		$command = Yii::app()->db->createCommand();
		$status = isset($_POST['status']) ? $_POST['status'] : 0;
		if($status == 0){
			//宝贝查询
			if(!empty($_POST['update']) && !empty($_POST['page']) && !empty($_POST['number'])){
				$page = $_POST['page'];
				$num = $_POST['number'];
				$item_id = ($page-1)*20 + $num;
				$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=0")->queryRow();
				if(empty($res)){
					$this->redirect("/web/admin?code=35418517&status=0");
					exit;
				}else{
					$this->render("admin",array('data'=>$res,'item_id'=>$item_id,'page'=>$page,'status'=>$status));
					exit;
				}
			}
			//宝贝修改
			if(empty($_POST['page']) || empty($_POST['number']) || empty($_POST['title']) || empty($_POST['pic']) || empty($_POST['price']) || empty($_POST['link']) || empty($_POST['old_price'])){
				$this->redirect("/web/admin?code=35418517&status=0");
				exit;
			}
			$page = $_POST['page'];
			$num = $_POST['number'];
			$item_id = ($page-1)*20 + $num;
			$title = $_POST['title'];
			$pic = $_POST['pic'];
			$price = $_POST['price'];
			$link = $_POST['link'];
			$desc = '';//$_POST['desc'];
			$baoyou = $_POST['baoyou'];
			$old_price = $_POST['old_price'];
			$zhe = round($old_price/$price,1);//$_POST['zhe'];
			$ctime = date('Y-m-d H:i:s',time());
			$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=0")->queryRow();
			if(empty($res)){
				$sql = "insert into `huigou_item` (item_id,title,pic,link,price,ctime,`desc`,zhe,baoyou,old_price,status) values('{$item_id}','{$title}','{$pic}','{$link}','{$price}','{$ctime}','{$desc}','{$zhe}','{$baoyou}','{$old_price}','0')";
			}else{
				$sql = "update `huigou_item` set title='{$title}',ctime='{$ctime}',pic='{$pic}',link='{$link}',price='{$price}',`desc`='{$desc}',zhe='{$zhe}',baoyou='{$baoyou}',old_price='{$old_price}' where item_id='{$item_id}' and status='0'";
			}
			$command->setText($sql)->execute();
			$num += 1;
			$this->redirect("/web/admin?code=35418517&item_id={$num}&p={$page}&status=0");
			exit;
		}else if($status == 1){
			//宝贝查询
			if(!empty($_POST['update']) && !empty($_POST['number'])){
				$item_id = $_POST['number'];
				$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=1")->queryRow();
				if(empty($res)){
					$this->redirect("/web/admin?code=35418517&status=1");
					exit;
				}else{
					$this->render("admin",array('data'=>$res,'item_id'=>$item_id,'status'=>$status));
					exit;
				}
			}
			//宝贝修改
			if(empty($_POST['number']) || empty($_POST['title']) || empty($_POST['pic']) || empty($_POST['price']) || empty($_POST['link']) || empty($_POST['desc'])){
				$this->redirect("/web/admin?code=35418517&status=1");
				exit;
			}
			$item_id = $_POST['number'];
			$title = $_POST['title'];
			$pic = $_POST['pic'];
			$price = $_POST['price'];
			$link = $_POST['link'];
			$desc = $_POST['desc'];
			$ctime = date("Y-m-d H:i:s");
			$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=1")->queryRow();
			if(empty($res)){
				$sql = "insert into `huigou_item` (item_id,title,pic,link,price,ctime,`desc`,status) values('{$item_id}','{$title}','{$pic}','{$link}','{$price}','{$ctime}','{$desc}','{$status}')";
			}else{
				$sql = "update `huigou_item` set title='{$title}',ctime='{$ctime}',pic='{$pic}',link='{$link}',price='{$price}',`desc`='{$desc}' where item_id='{$item_id}' and status='1'	";
			}
			$command->setText($sql)->execute();
			$item_id += 1;
			$this->redirect("/web/admin?code=35418517&item_id={$item_id}&status=1");
			exit;
		}else if($status == 2){
			//宝贝查询
			if(!empty($_POST['update']) && !empty($_POST['number'])){
				$item_id = $_POST['number'];
				$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=2")->queryRow();
				if(empty($res)){
					$this->redirect("/web/admin?code=35418517&status=2");
					exit;
				}else{
					$this->render("admin",array('data'=>$res,'item_id'=>$item_id,'status'=>$status));
					exit;
				}
			}
			//宝贝修改
			if(empty($_POST['number']) || empty($_POST['title']) || empty($_POST['pic']) || empty($_POST['link']) || empty($_POST['desc'])){
				$this->redirect("/web/admin?code=35418517&status=2");
				exit;
			}
			$item_id = $_POST['number'];
			$title = $_POST['title'];
			$pic = $_POST['pic'];
			$link = $_POST['link'];
			$desc = $_POST['desc'];
			$ctime = date('Y-m-d H:i:s',time());
			$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=2")->queryRow();
			if(empty($res)){
				$sql = "insert into `huigou_item` (item_id,title,pic,link,ctime,`desc`,status) values('{$item_id}','{$title}','{$pic}','{$link}','{$ctime}','{$desc}','{$status}')";
			}else{
				$sql = "update `huigou_item` set title='{$title}',ctime='{$ctime}',pic='{$pic}',link='{$link}',`desc`='{$desc}' where item_id='{$item_id}' and status='2'	";
			}
			$command->setText($sql)->execute();
			$item_id += 1;
			$this->redirect("/web/admin?code=35418517&item_id={$item_id}&status=2");
			exit;
		}else{
			
		}
		$this->redirect("/web/admin?code=35418517&item_id={$item_id}&status={$status}");
	}

	public function actionShangjia(){
		$page = !empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0? $_GET['page'] : 1;
		$keyword = !empty($_GET['keyword']) ? $_GET['keyword'] : '';
		$file = $this->niuren."/mobile/sjdp/getshops?page={$page}&keyword={$keyword}";
		$content = file_get_contents($file);
		$info = json_decode($content,true);
		if(empty($info)){
			$info = json_decode(substr($content,3),true);	
		}
		$pages = $info['pages'];
		$ldata = $info['litem'];
		$users = $info['users'];
		$this->render("shangjia",array('users'=>$users,'pages'=>$pages,'page'=>$page,'ldata'=>$ldata));
	}

	public function actionTemai(){
		$this->render("temai");
	}

	public function actionAbout(){
		$this->render("about");
	}
}
?>