<?php
class WebController extends TopController{
	public $layout = '//layouts/main';
	public $page = 1;
	public function init(){
		parent::init();
	}

	public function actionIndex(){
		$this->layout = '//layouts/tejia';
		$this->page = !empty($_GET['page']) ? $_GET['page'] : 1;
		$this->render('tejia1'); 
	}

	public function actionTejia(){
		$this->layout = '//layouts/tejia';
		$this->page = !empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0&&$_GET['page']<6 ? $_GET['page'] : 1;
		$vfile = "tejia".$this->page;
		$this->render($vfile);
	}

	public function actionShangjia(){
		$this->render("shangjia");
	}

	public function actionTemai(){
		$this->render("temai");
	}

	public function actionAbout(){
		$this->render("about");
	}

}
?>