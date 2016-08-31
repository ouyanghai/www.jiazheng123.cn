<!doctype html>
<html>
<head>
<meta name="baidu-site-verification" content="SRhzdpnaLs" />
<meta charset="utf-8"/>
<title><?php echo $this->menu[$this->action->id]['title'] ?></title>
<meta name="keywords" content="今日特价，超低价，九块九，九块九包邮，超值，品牌折扣，值得买，惠时尚"/>
<meta name="description" content="<?php echo $this->menu[$this->action->id]['des'] ?>"/>
<link rel="stylesheet" href="http://mai.sogou.com/assets/css/index.css?v=7.2">
<link rel="shortcut icon" href="<?php echo $this->assets['app'] ?>/images/hui.png" mce_href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="http://mai.sogou.com/assets/css/site.css?v=7.2">
<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app'] ?>/css/jia.css">
<style type="text/css">
.mactive{
	background-color:white;
	border-radius:3px;
}
.mactive a{
	color:red;
}
</style>
</head>
<body class="">

<div class="nav_bg" pbflag="主导航">
	<div class="nav cf">
		<a href="/" class="logo logo_tej ct" style="background:url('<?php echo $this->assets['app'] ?>/images/logo.png') no-repeat left;height:50px;margin-top:5px;">惠时尚</a>
		<ul class="nav_list cf">
			<?php if(!empty($this->menu)){
				foreach ($this->menu as $key => $value) {
			?>
				<li <?php if($this->action->id == $key) echo "class='mactive'" ?>>
				<a <?php if($this->action->id == $key) echo "style='color:red'" ?> href="<?php echo $value['url'] ?>" target="_blank"><?php echo $value['label'] ?></a>
				</li>
			<?php 		
				}
			} ?>
			
		</ul>
		<div class="searchbox cf " pbflag="sokuang">
			<div class="input">
				<input isNoneResult='' id='search_input' type="text" value='连衣裙'>
			</div>
			<a id='search_icon' href="#" class="ser_btn"><i class="icon icon_search"></i></a>
		</div>
	</div>
</div>

<?php echo $content; ?>

<div class="page_bottom" style="height:80px;background-color:#dedede;margin-top:20px;border-top:1px solid #ababab;border-bottom:1px solid #ababab;">
	<div id="footer" style="height:80px;background-color:#dedede;">
		<span>友情链接:</span>
		<a href="http://www.juanpi.com" target="_blank">卷皮网</a>
		<a href="http://www.zhe800.com/">折800</a>
		<a href="http://coubei.9hs.com/">凑贝</a>
		<a href="http://zshpldbz.com/">今日特价网</a>
		<a href="http://www.smzdm.com/">值得买</a>
		<a href="http://hao.360.cn/" target="_blank" >360导航</a>
		<a href="http://www.114la.com" target="_blank">114啦网址导航</a><br/>
		
		<a href="http://www.ytx.la">深圳微告传媒有限公司</a>&nbsp;<span style="font-size:10px;">版权所有</span>&nbsp;<a href="http://www.miitbeian.gov.cn" target="_blank">粤ICP备16010927号-1</a><br/>
	</div>
</div>

<script type="text/javascript">
	var spb_vars = spb_vars || { "ptype": "tejia99","pcode": "shouye","pricesection":""};
</script>
<script type="text/javascript" src="http://d.123.sogoucdn.com/u/pb/pb.257175.js"></script>
<!--<script src="/assets/js/jquery.min.js" type="text/javascript"></script>-->
<script type="text/javascript" src="http://mai.sogou.com/assets/js/common.js?v=7.2"></script>
<script type="text/javascript" src="http://mai.sogou.com/assets/js/index.js?v=7.2"></script>

<div class="tb_ad" id="tb_ad" style="" pbflag="taobaoad">		    
	<h2 class="tit">淘宝热搜</h2>		    
	<div class="info">		        
		<a href="http://re.taobao.com/search_ou?keyword=%e9%95%bf%e8%a3%99&amp;refpid=mm_14626936_13508395_53418399&amp;_input_charset=utf8" target="_blank">
			<img src="http://p4.123.sogoucdn.com/imgu/2016/08/20160809152343_402.jpg">		        
		</a>		        
		<span class="name">超气质雪纺长裙</span>		    
	</div>	    
</div>
<!--增加回传参数--><!--淘宝广告-->
<div class="tbad">    
</div>
<!--/淘宝广告-->
</body>
</html>