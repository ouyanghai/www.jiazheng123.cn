<style type="text/css">
span{
	display: inline-block;
	margin-top:20px;
}
.input{
	width:300px;
	height:25px;
}
textarea{
	width:300px;
	height:100px;
	margin-left:55px;
}
.maintitle{
	width:350px;
	height:30px;
	line-height: 30px;
	text-align: center;
	font-size:20px;
	margin:0 auto;
	margin-top:30px;
}
.btn{
	display: block;
	width:50px;
	height:30px;
	border-radius:4px;
	margin-top:10px;
	margin-left:50px;
}
</style>
<div style="width:980px;height:600px;margin:0 auto;background-color:#efefef;margin-top:20px;border-radius:5px;padding:10px 10px;">
<form action="/web/doadmin" method="post">
	<span>页码:&nbsp;</span>
	<span>第一页</span>&nbsp;&nbsp;<input <?php if($page==1){echo "checked";} ?> type="radio" name="page" value="1">
	<span>第二页</span>&nbsp;&nbsp;<input <?php if($page==2){echo "checked";} ?> type="radio" name="page" value="2">
	<br/>
	<span>商品序号:</span>
	<select name="number">
		<option value="">请选择</option>
		<?php  
		for($i=1;$i<=20;$i++){
			if($item_id == $i){
				echo "<option selected value='$i'>$i</option>";	
			}else{
				echo "<option value='$i'>$i</option>";	
			}
		}
		?>
	</select>
	<input type="submit" name="update" value="查询">
	<br/>
	<span class="maintitle">宝贝属性:</span><br/>
	<?php if(!empty($data)){ ?>
	<span>宝贝标题:</span><input class="input" type="text" name="title" value="<?php echo $data['title'] ?>"><br/>
	<span>宝贝图片:</span><input class="input" type="text" name="pic" value="<?php echo $data['pic'] ?>"><br/>
	<span>宝贝链接:</span><input class="input" type="text" name="link" value="<?php echo $data['link'] ?>"><br/>
	<span>宝贝价格:</span><input class="input" type="text" name="price" value="<?php echo $data['price'] ?>"><br/>
	<span>宝贝原价:</span><input class="input" type="text" name="old_price" value="<?php echo $data['old_price'] ?>"><br/>
	<!--<span>商品折扣:</span><input type="text" name="zhe" class="input" value="<?php echo $data['zhe'] ?>"><br/>-->
	<span>是否包邮:&nbsp;</span>
	<span>是</span>&nbsp;&nbsp;<input <?php if(!empty($data['baoyou'])){echo "checked";} ?> type="radio" name="baoyou" value="1">
	<span>否</span>&nbsp;&nbsp;<input <?php if(empty($data['baoyou'])){echo "checked";} ?> type="radio" name="baoyou" value="0">
	<br/>
	<?php }else{ ?>
	<span>宝贝标题:</span><input class="input" type="text" name="title"><br/>
	<span>宝贝图片:</span><input class="input" type="text" name="pic"><br/>
	<span>宝贝链接:</span><input class="input" type="text" name="link"><br/>
	<span>宝贝价格:</span><input class="input" type="text" name="price"><br/>
	<span>宝贝原价:</span><input class="input" type="text" name="old_price"><br/>
	<!--<span>商品折扣:</span><input type="text" name="zhe" class="input"><br/>-->
	<span>是否包邮:&nbsp;</span>
	<span>是</span>&nbsp;&nbsp;<input checked type="radio" name="baoyou" value="1">
	<span>否</span>&nbsp;&nbsp;<input type="radio" name="baoyou" value="0">
	<br/>
	<?php } ?>
	<!--
	<select name="zhe">
		<option value="">请选择</option>
		<?php  
		for($i=0.1;$i<=1;$i+=0.1){
			echo "<option value='$i'>$i</option>";	
		}
		?>
	</select><br/>
	<span>宝贝描述:</span><br/><textarea name="desc"></textarea><br/>-->
	<input class="btn" type="submit" value="提交">
	<hr/>
</form>
</div>