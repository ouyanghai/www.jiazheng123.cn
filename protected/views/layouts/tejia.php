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
		<!-- slider -->
		<div class="v1-silder-wrap" pbflag="轮播">
			<div class="v1-silder">
				<span class="tleft"></span>
				<span class="tright"></span>
				<ul>
					<li style="display: block">
						<div class="v1-silder-border">
							<i class="v1-silder-flag"></i>
							<span class="v1-silder-img">
								<a href="https://detail.tmall.com/item.htm?id=522947163939" target="_blank"><img src="http://i.huim.com/contents/14736456694499.jpg!290x290.jpg"></a>
							</span>
							<div class="v1-silder-div">
								<span class="v1-silder-title">
									<a href="https://detail.tmall.com/item.htm?id=522947163939" target="_blank">鞋柜必备# HDGHM 圆头牛津平底小白鞋</a>
								</span>
								<span class="v1-silder-price">
									24.8元包邮
								</span>
								<span class="v1-silder-desc">
									这款小白鞋，采用PU帮面，牛津鞋底，上脚轻盈，具有防霉透气，抑菌吸汗的作用。软底防滑，行走舒适不累脚，非常百搭的一款小皮鞋，皮的鞋面即使脏了轻轻一擦就解决啦~
								</span>
								<span class="v1-silder-buy">
									<a href="https://detail.tmall.com/item.htm?id=522947163939" class="list_buy_btn" target="_blank">
										<span class="go-buy">前往购买</span>
									</a>
								</span>
							</div>
						</div>
					</li>
					<li style="display: none">
						<div class="v1-silder-border">
							<i class="v1-silder-flag"></i>
							<span class="v1-silder-img">
								<a href="https://detail.tmall.com/item.htm?id=13721009589" target="_blank"><img src="http://i.huim.com/contents/14736448631374.jpg!290x290.jpg"></a>
							</span>
							<div class="v1-silder-div">
								<span class="v1-silder-title">
									<a href="https://detail.tmall.com/item.htm?id=13721009589" target="_blank">减肥监督者# 香山 精准电子称体重秤</a>
								</span>
								<span class="v1-silder-price">
									39元包邮
								</span>
								<span class="v1-silder-desc">
									这款体重计有室温测量，BMI指数测量的功能，采用钢化玻璃，达6mm，并且增加了防爆科技元素，可承重量达360斤，安全环保。重量感应，自动开关机，使用方便。
								</span>
								<span class="v1-silder-buy">
									<a href="https://detail.tmall.com/item.htm?id=13721009589" class="list_buy_btn" target="_blank">
									<span class="go-buy">前往购买</span>
									</a>
								</span>
							</div>
						</div>
					</li>
					<li style="display: none">
						<div class="v1-silder-border">
							<i class="v1-silder-flag"></i>
							<span class="v1-silder-img">
								<a href="https://detail.tmall.com/item.htm?id=537170774197" target="_blank"><img src="http://i.huim.com/contents/14735982653482.jpg!290x290.jpg"></a>
							</span>
							<div class="v1-silder-div">
								<span class="v1-silder-title">
									<a href="https://detail.tmall.com/item.htm?id=537170774197" target="_blank">冬天不臃肿# 雅鹿 男女加绒保暖内衣套装</a>
								</span>
								<span class="v1-silder-price">
									29.9元包邮
								</span>
								<span class="v1-silder-desc">
									雅鹿纯棉薄款保暖内衣，纯棉材质，亲肤贴身，经典圆领设计，贴合颈部线条，简约大方。加绒更保暖，活动自如不束缚~
								</span>
								<span class="v1-silder-buy">
									<a href="https://detail.tmall.com/item.htm?id=537170774197" class="list_buy_btn" target="_blank">
									<span class="go-buy">前往购买</span>
									</a>
								</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- 广告图片列表 -->
		<div class="v1-adver-wrap" pbflag="头部小图">
			<div class="v1-adver-list">
				<ul class="cf">
					<li>
						<img src="http://i.huim.com/zhuangji/14732323221806.jpg!/fw/440/unsharp/true" alt="">
						<a class="cover" href='<?php echo $this->createUrl("tejia",array("keyword"=>"裙")) ?>' ><br/>胸小又怎样<br/><font size="3">穿衣就是比你好看</font></a>
					</li>
					<li>
						<img src="http://i.huim.com/zhuangji/14725506496219.jpg!/fw/440/unsharp/true" alt="">
						<a  class="cover" href='<?php echo $this->createUrl("tejia",array("keyword"=>"婴")) ?>' ><br/>白领妈咪不慌乱<br/><font size="3">育儿神器来帮忙</font></a>
					</li>
				</ul>
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