<div class="header">
    <div class="top_header">
        <div class="main_logo">
            <div class="logo">
                <a href="http://shop<?php echo $data['sid']?>.taobao.com" target="_blank"><img src="http://logo.taobao.com/shop-logo<?php echo $data['pic'] ?>"></a>
                <a class="title" href="http://shop<?php echo $data['sid']?>.taobao.com" target="_blank"><?php echo $data['title']; ?></a>
            </div>
            <div class="logo_info">
                <span class="store_shop">
                    <a href="http://shop<?php echo $data['sid']?>.taobao.com" target="_blank"><em></em>
                    <label>收藏店铺</label></a>
                    </span>
                <span class="mobile_erwei">
                    <img style="float:left;" width="15" height="15" src="https://gqrcode.alicdn.com/img?type=cs&shop_id=35418517&w=140&h=140&el=q&v=1"><label style="display:inline-block;height:20px;float:left;">用手机逛本店</label>
                    <div class='erwei'><img src="https://gqrcode.alicdn.com/img?type=cs&shop_id=35418517&w=140&h=140&el=q&v=1"></div>
                </span>
                
            </div>
        </div>
    </div>
    <div class="menu_nav">
        <div class="nav">
            <ul>
                <li><a href="<?php echo $this->createUrl('shop',array('sid'=>$data['sid'])) ?>">首页</a></li>
                <li><a href="<?php echo $this->createUrl('item',array('sid'=>$data['sid'])) ?>">所有宝贝</a></li>
                <li><a href="<?php echo $this->createUrl('about',array('sid'=>$data['sid'])) ?>">店铺简介</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="content">
    <div style="width:950px;height:600px;background-color:#efefef;">
        <div style="padding-left:20px;padding-top:20px;">
            <?php echo $data['desc'] ?>
        </div>
    </div>
</div>
