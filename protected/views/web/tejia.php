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
					<?php if(empty($dao_res)){ ?>
					<li style="display: block">
						<div class="v1-silder-border">
							<i class="v1-silder-flag"></i>
							<span class="v1-silder-img">
								<a href="https://detail.tmall.com/item.htm?id=520991913671" target="_blank"><img src="http://i.huim.com/contents/14743398225073.png!290x290.jpg"></a>
							</span>
							<div class="v1-silder-div">
								<span class="v1-silder-title">
									<a href="https://detail.tmall.com/item.htm?id=520991913671" target="_blank">汤米鼠 秋冬婴幼儿纯棉加厚分腿睡袋</a>
								</span>
								<span class="v1-silder-price">
									39元包邮
								</span>
								<span class="v1-silder-desc">
									天猫售价69元，点我领取30元优惠券，券后实付39元包邮到手。秋冬季节，宝宝睡觉再也不用担心会踢被子着凉啦~
								</span>
								<span class="v1-silder-buy">
									<a href="https://detail.tmall.com/item.htm?id=520991913671" class="list_buy_btn" target="_blank">
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
								<a href="https://detail.tmall.com/item.htm?id=534983874688" target="_blank"><img src="http://i.huim.com/contents/14743388328979.jpg!290x290.jpg"></a>
							</span>
							<div class="v1-silder-div">
								<span class="v1-silder-title">
									<a href="https://detail.tmall.com/item.htm?id=534983874688" target="_blank">高腰显瘦# 格年 破洞薄款牛仔裤</a>
								</span>
								<span class="v1-silder-price">
									25元包邮
								</span>
								<span class="v1-silder-desc">
									这款牛仔裤有多个款式选择，破洞高腰款和高腰无破洞款，其实这两年特别流行破洞款式，又时候洞破的越多，越时尚哦，裤脚还是毛边设计，拉长个人比例，高腰款还很显瘦，深色比较好搭配各系衣服哦~
								</span>
								<span class="v1-silder-buy">
									<a href="https://detail.tmall.com/item.htm?id=534983874688" class="list_buy_btn" target="_blank">
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
								<a href="https://detail.tmall.com/item.htm?id=521600442595" target="_blank"><img src="http://i.huim.com/contents/14743373443979.jpg!290x290.jpg"></a>
							</span>
							<div class="v1-silder-div">
								<span class="v1-silder-title">
									<a href="https://detail.tmall.com/item.htm?id=521600442595" target="_blank">岩石草 男士珊法兰绒居服</a>
								</span>
								<span class="v1-silder-price">
									39.9元包邮
								</span>
								<span class="v1-silder-desc">
									这款男士家居服，采用柔软质地的法兰绒面料，不仅保暖，穿着舒适细腻，不起球不掉色~还有多种款式可选~
								</span>
								<span class="v1-silder-buy">
									<a href="https://detail.tmall.com/item.htm?id=521600442595" class="list_buy_btn" target="_blank">
									<span class="go-buy">前往购买</span>
									</a>
								</span>
							</div>
						</div>
					</li>
					<?php }else{ ?>
						<?php foreach ($dao_res as $value) { if($value['status']==1){?>
							<li style="display: none">
						<div class="v1-silder-border">
							<i class="v1-silder-flag"></i>
							<span class="v1-silder-img">
								<a href="<?php echo $value['link'] ?>" target="_blank"><img src="<?php echo $value['pic'] ?>"></a>
							</span>
							<div class="v1-silder-div">
								<span class="v1-silder-title">
									<a href="<?php echo $value['link'] ?>" target="_blank"><?php echo $value['title'] ?></a>
								</span>
								<span class="v1-silder-price">
									<?php echo $value['price'] ?>
								</span>
								<span class="v1-silder-desc">
									<?php echo $value['desc'] ?>
								</span>
								<span class="v1-silder-buy">
									<a href="<?php echo $value['link'] ?>" class="list_buy_btn" target="_blank">
									<span class="go-buy">前往购买</span>
									</a>
								</span>
							</div>
						</div>
					</li>
						<?php }} ?>
					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- 广告图片列表 -->
		<div class="v1-adver-wrap" pbflag="头部小图">
			<div class="v1-adver-list">
				<ul class="cf">
					<?php if(empty($dao_res)){ ?>
					<li>
						<img src="http://i.huim.com/zhuangji/14741315796948.jpg!/fw/220" alt="">
						<a class="cover" href='<?php echo $this->createUrl("tejia",array("keyword"=>"旅行箱")) ?>' ><br/>箱约去旅行<br/><font size="3">下一站是哪里</font></a>
					</li>
					<li>
						<img src="http://i.huim.com/zhuangji/14742864934760.jpg!/fw/220" alt="">
						<a  class="cover" href='<?php echo $this->createUrl("tejia",array("keyword"=>"按摩器")) ?>' ><br/>爸<br/><font size="3">我回来了</font></a>
					</li>
					<?php }else{ ?>
						<?php foreach ($dao_res as $value) { if($value['status']==2){?>
							<li>
								<img src="<?php echo $value['pic']; ?>" alt="">
								<a  class="cover" href='<?php echo $this->createUrl("tejia",array("keyword"=>$value['link'])) ?>' ><br/><?php echo $value['title']; ?><br/><font size="3"><?php echo $value['desc']; ?></font></a>
							</li>
						<?php }} ?>
					<?php } ?>
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
<ul class="list_info cf">
	<?php 
	foreach ($data as $key => $value) { 
		if($value['sid'] == 35418517){continue;}
	?>
	<!--1个li是一个list块是可循环的-->
	<li>
		<div>
			<a href="http://item.taobao.com/item.htm?id=<?php echo $value['iid'] ?>" target="_blank">
				<img class="img" src="<?php echo $value['pic_url'] ?>"/>
				<h3 class="tit"><?php echo $value['title'] ?></h3>
				<div class="detail">
					<span class="price">￥<em><?php echo $value['price'] ?></em></span>
				</div>
				<span class="hover"></span>
				<span class="go ">去看看>></span>
				<div class="icon-wrap cf"></div>
			</a>
		</div>
	</li>
	<?php } ?>
</ul>
</div>

	<!-- pagination -->
	<div class="mai-page-wrap" pbflag="内容列表">
		<div>
		<div class="tpage" style="display:inline-block;">
			<?php if($page == 1){ ?>
                <a disabled="disabled">首页</a>
                <a class="next" disabled="disabled">上一页</a>
            <?php }else{ ?>
                <a href="<?php echo $this->createUrl('tejia',array('page'=>1)) ?>">首页</a>
                <a class="next" href="<?php echo $this->createUrl('tejia',array('page'=>$page-1)) ?>">上一页</a>
            <?php } ?>
            <?php 
                $s_page = $page-4>0?$page-4:1;
                $e_page = $page+5>$pages?$pages:$page+5;
                for($i=$s_page;$i<=$e_page;$i++){
                    if($i == $page){ ?>
                        <a class='cur' disabled="disabled" href="<?php echo $this->createUrl('tejia',array('page'=>$i)) ?>"><?php echo $i; ?></a>
                    <?php }else{ ?> 
                        <a class="page_n" href="<?php echo $this->createUrl('tejia',array('page'=>$i)) ?>"><?php echo $i; ?></a>
            <?php }} ?>
            
            <?php if($pages == $page){ ?>
                <a class="next" disabled="disabled">下一页</a>
                <a disabled="disabled">尾页</a>
            <?php }else{ ?>
               <a class="next" href="<?php echo $this->createUrl('tejia',array('page'=>$page+1)) ?>">下一页</a>
                <a href="<?php echo $this->createUrl('tejia',array('page'=>$pages)) ?>">尾页</a>
            <?php } ?>
		</div>
		</div>
	</div>

	
</div>
<div class="tb_ad" id="tb_ad" style="" pbflag="taobaoad">		    
	<span class="tit">
		<i class="td_ad_flag"></i>
		<h2>今日特卖</h2>
		<i class="td_ad_close"></i>
	</span>
	<ul class="lunbo">
		<?php foreach ($ldata as $key => $value) { 
			//if($value['sid'] == 35418517){continue;}
		?>
			<li>
				<?php foreach ($value as $val) { ?>
				<div class="info" >		        
					<a target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $val['iid'] ?>" target="_blank">
						<img src="<?php echo $val['pic_url'] ?>">		        
					</a>		        
					<span class="name"><?php echo $val['title'] ?></span>		    
				</div>			
				<?php } ?>
			</li>

		<?php } ?>
	</ul>
</div>
<!--to top-->
<a href="###" id="to_top" class="to_top add_ml550" rel="nofollow" title="返回顶部" style="display: none;" pbflag="右侧电梯">回顶部</a>