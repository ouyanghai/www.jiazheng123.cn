<?php $this->beginContent('//layouts/main'); ?>

<!--subnav-->
<!--访问今日特价频道PC端首页时，导航区域二级导航（分类）应当隐藏-->
<div class="subnav mb20 subnav_tj">
	<div class="container " pbflag="二级导航">
		<div class="subnav_list cf">
		<!--<a href="/tejia/yugao/"  class="announce"><i class="icon i-horn"></i>精彩预告</a>-->
			<a href="<?php echo $this->createUrl("tejia",array("keyword"=>"all")) ?>"  class="all active">全部</a>
			<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"all")) ?>'>品牌优选</a>
			<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"all")) ?>'  >9块9专场<i class="icon i-hot-2"></i></a>
			<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"女装")) ?>' >女装</a>
			<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"男装")) ?>' >男装</a>
			<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"鞋,包")) ?>' >鞋包</a>
			<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"居家")) ?>' >居家</a>
			<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"配饰")) ?>' >配饰</a>
			<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"母婴")) ?>' >母婴</a>
		</div>
	</div>
</div>

<div class="container">
	<!-- 滚动图片展示 -->
	<div class="wrapper mb20 mt20"><!---->
		<div class="tp_nav" pbflag="首页顶部分类">
			<ul class="t_nav_list cf">
				<li><a href='<?php echo $this->createUrl("tejia",array("keyword"=>"女装")) ?>'>女装</a></li>
				<li><a href='<?php echo $this->createUrl("tejia",array("keyword"=>"男装")) ?>'>男装</a></li>
				<li><a href='<?php echo $this->createUrl("tejia",array("keyword"=>"鞋包")) ?>'>鞋包</a></li>
				<li><a href='<?php echo $this->createUrl("tejia",array("keyword"=>"居家")) ?>'>居家</a></li>
				<li><a href='<?php echo $this->createUrl("tejia",array("keyword"=>"配饰")) ?>'>配饰</a></li>
				<li><a href='<?php echo $this->createUrl("tejia",array("keyword"=>"母婴")) ?>'>母婴</a></li>
				<li><a href='<?php echo $this->createUrl("tejia",array("keyword"=>"all")) ?>'>优选</a></li>
			</ul>
			<div class="t_nav_jkj">
				
			</div>
		</div>
		<!-- slider -->
		<div class="v1-silder-wrap" pbflag="轮播">
			<div class="v1-silder">
				<span class="tleft"></span>
				<span class="tright"></span>
				<ul>
					<li style="display: block"><a href='#' ><img src="http://p2.123.sogoucdn.com/imgu/2016/07/20160729150339_193.jpg" alt=""></a></li>
					<li style="display: none"><a href='#' ><img src="http://p2.123.sogoucdn.com/imgu/2016/07/20160715113256_803.jpg" alt=""></a></li>
				</ul>
			</div>
		</div>
		<!-- 广告图片列表 -->
		<div class="v1-adver-wrap" pbflag="头部小图">
			<div class="v1-adver-list">
				<ul class="cf">
					<li><a href='#' ><img src="http://p9.123.sogoucdn.com/imgu/2016/07/20160706182301_72.jpg" alt=""><span class="cover"></span></a></li>
					<li><a href='#' ><img src="http://p2.123.sogoucdn.com/imgu/2016/07/20160706182303_363.jpg" alt=""><span class="cover"></span></a></li>
					<li><a href='#' ><img src="http://p2.123.sogoucdn.com/imgu/2016/07/20160706182525_910.jpg" alt=""><span class="cover"></span></a></li>
					<li><a href='#' ><img src="http://p4.123.sogoucdn.com/imgu/2016/07/20160706182307_356.jpg" alt=""><span class="cover"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div pbflag="reci">
		<!--推荐热词-->
		<!--只有在首页显示多行。其他情况分类、9块9热词配置多个，超出一行时应仅显示一行-->
		<div class="hotsale cf" >
			<div class="h_tit"><i class="icon icon_hotw"></i>正在热卖</div>
			<div class="h_word">
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"空调衫")) ?>'><span class="red">空调衫</span></a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"连衣裙")) ?>'>连衣裙</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"防晒衣")) ?>'>防晒衣</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"雪纺衫")) ?>'><span class="red">雪纺衫</span></a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"无痕文胸")) ?>'><span class="red">无痕文胸</span></a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"短裤")) ?>'>短裤</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"比基尼泳衣")) ?>'>比基尼泳衣</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"时尚女鞋")) ?>'><span class="red">时尚女鞋</span></a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"童装")) ?>'><span class="red">宝宝童装</span></a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"运动鞋")) ?>'>运动鞋</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"隐形丝袜")) ?>'>隐形丝袜</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"妈妈装")) ?>'><span class="red">妈妈装</span></a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"清凉睡袍")) ?>'>清凉睡袍</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"修身风衣")) ?>'>修身风衣</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"新款女包")) ?>'>新款女包</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"双肩包")) ?>'>双肩包</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"男鞋")) ?>'>热卖男鞋</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"男士T恤")) ?>'>男士T恤</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"男款衬衫")) ?>'>男款衬衫</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"四件套")) ?>'>四件套</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"收纳工具")) ?>'><span class="red">收纳工具</span></a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"旅行箱包")) ?>'>旅行箱包</a>
				<a href='<?php echo $this->createUrl("tejia",array("keyword"=>"墨镜")) ?>'>墨镜</a>
			</div>
		</div>
	</div>

	<!--分类价格和分页-->
	<div class="filter borb cf">
		<div pbflag="价格区间">
			<dl class="f_price">
				<dt>全部特价</dt>
				<dd><a href='<?php echo $this->createUrl("tejia",array("price"=>"all")) ?>'>价格不限</a>|</dd>
				<dd><a href='<?php echo $this->createUrl("tejia",array("price"=>"1")) ?>'>9.9元以下</a>|</dd>
				<dd><a href='<?php echo $this->createUrl("tejia",array("price"=>"2")) ?>'>10-19.9元</a>|</dd>
				<dd><a href='<?php echo $this->createUrl("tejia",array("price"=>"3")) ?>'>20-39.9元</a>|</dd>
				<dd><a href='<?php echo $this->createUrl("tejia",array("price"=>"4")) ?>'>39.9元以上</a></dd>
			</dl>
		</div>
	</div>

	<!--list 开始-->
	<div class="list  mt20" pbflag="内容列表">
		<?php echo $content; ?>
</div>

<!--to top-->
<a href="###" id="to_top" class="to_top add_ml550" rel="nofollow" title="返回顶部" style="display: none;" pbflag="右侧电梯">回顶部</a>


<?php $this->endContent(); ?>