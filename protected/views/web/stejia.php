<ul class="list_info cf">
<?php foreach ($res as $value) { ?>
<!--1个li是一个list块是可循环的-->
<li pbext="item_id=3252763816297356337&source_id=640&source=蛮便宜" >
	<div>
		<a href="<?php echo $value['link'] ?>" target="_blank">
			<img class="img" data-original="<?php echo $value['pic']  ?>" alt="" src="<?php echo $value['pic']  ?>"/>
			<h3 class="tit"><?php echo $value['title'] ?></h3>
			<div class="detail">
				<span class="fr">
					<span class="discount"><?php echo $value['zhe'] ?>折</span>
					<?php if(!empty($value['baoyou'])){ ?>
					<span>包邮</span>
					<?php } ?>
				</span>
				<span class="price">￥<em><?php echo $value['price'] ?></em></span>
				<s class="del">￥<?php echo $value['old_price'] ?></s>
			</div>
			<span class="hover"></span>
			<span class="go ">去看看>></span>
			<div class="icon-wrap cf"><i class="icon i-today"></i></div>
		</a>
	</div>
</li>

<?php } ?>
</ul></div>
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

	<div class="tb_ad" id="tb_ad" style="" pbflag="taobaoad">		    
		<h2 class="tit">淘宝热搜</h2>		    
		<ul class="lunbo">
			<?php foreach ($ldata as $value) { 
				if($value['sid'] == 35418517){continue;}
			?>
				



<li>
					<div class="info" >		        
						<a target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $value['iid'] ?>" target="_blank">
							<img src="<?php echo $value['pic_url'] ?>">		        
						</a>		        
						<span class="name"><?php echo $value['title'] ?></span>		    
					</div>			
				</li>

			<?php } ?>
		</ul>
	</div>