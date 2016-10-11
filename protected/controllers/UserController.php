<?php
class UserController extends TopController{
	public $layout = "//layouts/umain";
	public $shop_title='';
	//public $niuren = "http://niu.haodianpu.com";
	public $niuren = "http://121.199.173.134";
	public $defaultAction = "shop";
	public function init(){
		parent::init();

	}

	public function actionIndex(){
		$this->redirect("/user/shop");
	}

	public function actionShop(){
		if(empty($_GET['sid'])){
			$this->redirect("/web/index");
		}
		if($_GET['sid'] == 123){
			$this->layout = "//layouts/blank";
			$this->render("model");
			exit;
		}
		$ccid = !empty($_GET['cid']) ? $_GET['cid'] : 0;
		$file = $this->niuren."/mobile/sjdp/getshop?sid={$_GET['sid']}&cid={$ccid}";
		$content = file_get_contents($file);
		$data = json_decode($content,true);
		if(empty($data)){
			$data = json_decode(substr($content,3),true);
		}
		if(!empty($data['error_no'])){
				header("refresh:5;url=http://www.jiazheng123.cn");
				echo "<div style='width:600px;margin:0 auto;text-align:center;'>".$data['error_info'].",5秒后回自动<a href='http://www.jiazheng123.cn'>跳转</a>到网站首页</div>";	
			Yii::app()->end();
		}
		$this->shop_title = $data['title'];
		$star['level'] = ceil($data['level']/5);
		$star['num'] = $data['level']%5 == 0 ? 5 : $data['level']%5;
		$this->render("shop",array("data"=>$data,'ccid'=>$ccid,'star'=>$star));
	}

	public function actionItem(){
		if(empty($_GET['sid'])){
			$this->redirect("/web/index");
		}
		if($_GET['sid'] == 123){
			$this->layout = "//layouts/blank";
			$this->render("modelitem");
			exit;
		}
		$ccid = !empty($_GET['cid']) ? $_GET['cid'] : 0;
		$page = !empty($_GET['page'])&&is_numeric($_GET['page']) ? $_GET['page'] : 1;
		$file = $this->niuren."/mobile/sjdp/getitem?sid={$_GET['sid']}&cid={$ccid}&page={$page}";
		$content = file_get_contents($file);
		$data = json_decode($content,true);
		if(empty($data)){
			$data = json_decode(substr($content,3),true);
		}
		if(!empty($data['error_no'])){
			if($data['error_no'] == 1){
				echo "<div style='width:600px;margin:0 auto;text-align:center;'>".$data['error_info']."</div>";	
			}
			Yii::app()->end();
		}
		$this->shop_title = $data['title'];
		$star['level'] = ceil($data['level']/5);
		$star['num'] = $data['level']%5 == 0 ? 5 : $data['level']%5;
		$this->render("item",array("data"=>$data,'ccid'=>$ccid,'star'=>$star,'page'=>$page));
		
	}

	public function actionAbout(){
		if(empty($_GET['sid'])){
			$this->redirect("/web/index");
		}
		if($_GET['sid'] ==123){
			$this->layout = "//layouts/blank";
			$this->render("modelabout");
			exit;
		}
		$ccid = !empty($_GET['cid']) ? $_GET['cid'] : 0;
		$file = $this->niuren."/mobile/sjdp/getdesc?sid={$_GET['sid']}&cid={$ccid}";
		$content = file_get_contents($file);
		$data = json_decode($content,true);
		if(empty($data)){
			$data = json_decode(substr($content,3),true);
		}
		if(!empty($data['error_no'])){
			if($data['error_no'] == 1){
				echo "<div style='width:600px;margin:0 auto;text-align:center;'>".$data['error_info']."</div>";	
			}
			Yii::app()->end();
		}
		$this->shop_title = $data['title'];
		$this->render("about",array("data"=>$data));
	}


}

?>