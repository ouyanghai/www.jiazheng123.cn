<?php
header("content-type:text/html;charset=utf-8");
/*****************引流start**********************/
$refer = isset($_GET['refer']) ? $_GET['refer'] : ( isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "" );
if( strpos($refer, "t.haodianpu") ){
	$durl = "http://121.199.173.134/mobile/sjdp/shopll";
	//$durl = "http://niu.haodianpu.com/mobile/sjdp/shopll";
	$sid = 35418517;
	$content = file_get_contents($durl);
	$iid = json_decode($content,true);
	if(!empty($iid)){
		$url = "http://item.taobao.com/item.htm?id={$iid}";
	}else{
		$url = "http://shop35418517.taobao.com";
	}
    echo "<html><head><meta http-equiv='refresh' content='5; url={$url}' /></head><body><a id='link' href='{$url}' target='_self'></a><script language='javascript'>if( self != top ){top.location.href=self.location.href;}else{setTimeout(function(){self.location='{$url}';}, 3000);document.getElementById('link').click();}</script></body></html>";
    exit;
}
/*****************引流end**********************/

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();

