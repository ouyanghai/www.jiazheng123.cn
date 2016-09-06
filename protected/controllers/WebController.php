<?php
class WebController extends TopController{
	public $layout = '//layouts/main';
	public $menu = array(
		'tejia'=>array('label'=>'今日特价','url'=>'/web/tejia','title'=>"今日特价| 全场1折起，超低价还包邮的打折商品聚合！- 惠时尚",'des'=>"网聚全网最优惠的超低价折扣商品。每日千款超值商品实时更新，你最值得关注的特价促销，就在惠时尚今日特价！"),
		'temai'=>array('label'=>'限时特卖','url'=>'/web/temai',"title"=>"惠时尚限时特卖，品牌特卖，正品低价限时折扣，聚全网优惠，品质保证！- 惠时尚","des"=>"品牌特卖，惠时尚，特卖，名品，品牌，打折，促销，品牌折扣，限时抢购，正品特卖,品牌折扣网,品牌团"),
		'shangjia'=>array('label'=>'商家大全','url'=>'/web/shangjia',"title"=>"商家大全|汇聚全网优质好店-惠时尚","des"=>"网聚全网最优惠的超低价折扣商品。每日千款超值商品实时更新，你最值得关注的特价促销，就在惠时尚今日特价！"),
		'about'=>array('label'=>'关于我们','url'=>'/web/about',"title"=>"惠时尚-关于我们","des"=>"网聚全网最优惠的超低价折扣商品。每日千款超值商品实时更新，你最值得关注的特价促销，就在惠时尚今日特价！"),
	);
	//public $niuren = "http://niu.haodianpu.com";
	public $niuren = "http://121.199.173.134";
	public function init(){
		parent::init();
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
		$this->layout = '//layouts/tejia';
		$page = !empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0 ? $_GET['page'] : 1;
		$keyword = !empty($_GET['keyword']) ? $_GET['keyword'] : '';
		$price = !empty($_GET['price']) ? $_GET['price'] : 'all';
		$shop = !empty($_GET['shop']) ? $_GET['shop'] : '';
		$file = $this->niuren."/mobile/sjdp/gettejiaitem?page={$page}&keyword={$keyword}&price={$price}&shop={$shop}";
		$content = file_get_contents($file);
		$res = json_decode($content,true);
		$pages = $res['pages'];
		$data = $res['item'];
		$ldata = $res['litem'];
		//print_r($ldata);exit;
		$this->render("tejia",array('data'=>$data,'ldata'=>$ldata,'pages'=>$pages,'page'=>$page));
	}

	public function actionShangjia(){
		$page = !empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0? $_GET['page'] : 1;
		$keyword = !empty($_GET['keyword']) ? $_GET['keyword'] : '';
		$file = $this->niuren."/mobile/sjdp/getshops?page={$page}&keyword={$keyword}";
		$content = file_get_contents($file);
		$users = json_decode($content,true);
		$pages = array_shift($users);
		$this->render("shangjia",array('users'=>$users,'pages'=>$pages,'page'=>$page));
	}

	public function actionTemai(){
		$this->render("temai");
	}

	public function actionAbout(){
		$this->render("about");
	}
}
?>