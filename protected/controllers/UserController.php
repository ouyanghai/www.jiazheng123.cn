<?php
class UserController extends TopController{
	public $layout = "//layouts/umain";
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
		$ccid = !empty($_GET['cid']) ? $_GET['cid'] : 0;
		$file = "http://niu.haodianpu.com/mobile/sjdp/getshop?sid={$_GET['sid']}&cid={$ccid}";
		$content = file_get_contents($file);
		$data = json_decode($content,true);
		if(empty($data)){
			echo "<div style='width:600px;margin:0 auto;text-align:center;'>信息查询错误</div>";
			Yii::app()->end();
		}
		$star['level'] = ceil($data['level']/5);
		$star['num'] = $data['level']%5 == 0 ? 5 : $data['level']%5;
		$this->render("shop",array("data"=>$data,'ccid'=>$ccid,'star'=>$star));
	}

	public function actionItem(){
		if(empty($_GET['sid'])){
			$this->redirect("/web/index");
		}
		$ccid = !empty($_GET['cid']) ? $_GET['cid'] : 0;
		$page = !empty($_GET['page'])&&is_numeric($_GET['page']) ? $_GET['page'] : 1;
		$file = "http://niu.haodianpu.com/mobile/sjdp/getitem?sid={$_GET['sid']}&cid={$ccid}&page={$page}";
		$content = file_get_contents($file);
		$data = json_decode($content,true);
		$star['level'] = ceil($data['level']/5);
		$star['num'] = $data['level']%5 == 0 ? 5 : $data['level']%5;
		$this->render("item",array("data"=>$data,'ccid'=>$ccid,'star'=>$star,'page'=>$page));
		
	}

	public function actionAbout(){
		if(empty($_GET['sid'])){
			$this->redirect("/web/index");
		}
		$ccid = !empty($_GET['cid']) ? $_GET['cid'] : 0;
		$file = "http://niu.haodianpu.com/mobile/sjdp/getdesc?sid={$_GET['sid']}&cid={$ccid}";
		$content = file_get_contents($file);
		$data = json_decode($content,true);
		$this->render("about",array("data"=>$data));
	}


}

?>