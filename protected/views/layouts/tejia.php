<?php $this->beginContent('//layouts/main'); ?>

<!--subnav-->
<!--访问今日特价频道PC端首页时，导航区域二级导航（分类）应当隐藏-->
<div class="subnav mb20 subnav_tj">
	<div class="container " pbflag="二级导航">
		<div class="subnav_list cf">
		<!--<a href="/tejia/yugao/"  class="announce"><i class="icon i-horn"></i>精彩预告</a>-->
			<a href="#"  class="all active">全部</a>
			<a href='#'>品牌优选</a>
			<a href='#'  >9块9专场<i class="icon i-hot-2"></i></a>
			<a href='#' >女装</a>
			<a href='#' >男装</a>
			<a href='#' >鞋包</a>
			<a href='#' >居家</a>
			<a href='#' >配饰</a>
			<a href='#' >母婴</a>
		</div>
	</div>
</div>

<div class="container">
	<!-- 滚动图片展示 -->
	<div class="wrapper mb20 mt20"><!---->
		<div class="tp_nav" pbflag="首页顶部分类">
			<ul class="t_nav_list cf">
				<li><a href='#'>女装</a></li>
				<li><a href='#'>男装</a></li>
				<li><a href='#'>鞋包</a></li>
				<li><a href='#'>居家</a></li>
				<li><a href='#'>配饰</a></li>
				<li><a href='#'>母婴</a></li>
				<li><a href='#'>优选</a></li>
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
				<a href='#'><span class="red">空调衫</span></a>
				<a href='#'>连衣裙</a>
				<a href='#'>防晒衣</a>
				<a href='#'><span class="red">雪纺衫</span></a>
				<a href='#'><span class="red">无痕文胸</span></a>
				<a href='#'>短裤</a>
				<a href='#'>比基尼泳衣</a>
				<a href='#'><span class="red">时尚女鞋</span></a>
				<a href='#'><span class="red">宝宝童装</span></a>
				<a href='#'>运动鞋</a>
				<a href='#'>隐形丝袜</a>
				<a href='#'><span class="red">妈妈装</span></a>
				<a href='#'>清凉睡袍</a>
				<a href='#'>修身风衣</a>
				<a href='#'>新款女包</a>
				<a href='#'>双肩包</a>
				<a href='#'>热卖男鞋</a>
				<a href='#'>男士T恤</a>
				<a href='#'>男款衬衫</a>
				<a href='#'>四件套</a>
				<a href='#'>面膜</a>
				<a href='#'><span class="red">收纳工具</span></a>
				<a href='#'>旅行箱包</a>
				<a href='#'>墨镜</a>
			</div>
		</div>
	</div>

	<!--分类价格和分页-->
	<div class="filter borb cf">
		<div pbflag="价格区间">
			<dl class="f_price">
				<dt>全部特价</dt>
				<dd><a href='#'>价格不限</a>|</dd>
				<dd><a href='#'>9.9元以下</a>|</dd>
				<dd><a href='#'>10-19.9元</a>|</dd>
				<dd><a href='#'>20-39.9元</a>|</dd>
				<dd><a href='#'>39.9元以上</a></dd>
			</dl>
		</div>

		<div class="f_page" pbflag="顶部翻页">
			<a href='#'></a>
			<span class="num"><em class="red">1</em>/50</span>
			<span>页</span>
			<a href='#' ></a>
		</div>
	</div>

	<!--list 开始-->
	<div class="list  mt20" pbflag="内容列表">
		<?php echo $content; ?>
	</div>

	<!-- pagination -->
	<div class="mai-page-wrap" pbflag="内容列表">
		<div class="pagination cf">
			<a href="<?php echo $this->createUrl('tejia',array('page'=>$this->page-1)) ?>" class="next">上一页</a>
			<?php
			
			for($i=1;$i<6;$i++){
				if($this->page == $i){ ?>
					<a href="<?php echo $this->createUrl('tejia',array('page'=>$i)) ?>" class='cur'><?php echo $i ?></a>
			<?php }else{	?>
					<a href="<?php echo $this->createUrl('tejia',array('page'=>$i)) ?>"><?php echo $i ?></a>
			<?php }} ?>
			<a href="<?php echo $this->createUrl('tejia',array('page'=>$this->page+1)) ?>" class="next">下一页</a>
		</div>
	</div>
</div>

<!--to top-->
<a href="###" id="to_top" class="to_top add_ml550" rel="nofollow" title="返回顶部" style="display: none;" pbflag="右侧电梯">回顶部</a>


<?php $this->endContent(); ?>