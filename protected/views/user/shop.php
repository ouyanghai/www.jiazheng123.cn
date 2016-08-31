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
<div class="banner">
    <ul class="banner_list">
        <li><a href=""><img src="http://e.ytx.la/images/asp/1.png"></a></li>
        <li><a href=""><img src="http://e.ytx.la/images/asp/2.png"></a></li>
    </ul>
    <div class="banner_arrow">
        <a href="javascript:;" class="arrow_prev"><i></i></a>
        <a href="javascript:;" class="arrow_next"><i></i></a>
    </div>
    <div class="round">
        <a href="javascript:;"></a>
        <a href="javascript:;"></a>
    </div>
</div>

<div class="content">
    <div class="content_l">
        <div class="cate">
            <span><h3>宝贝分类</h3></span>
            <ul>
            <?php 
            if(!empty($data['cate'])){
                $cates = $data['cate'];
            foreach ( $cates as $pid => $cate ) {
                if ( $pid != 0 ) {
                    if ( isset( $cates[0][$pid] ) ) {
                        $title = CommonFunc::cut_str( $cates[0][$pid]['name'], 20, '' );
            ?>
                        <li class="optgroup">
                            <span><?php echo $title ?><i class='item-up'></i></span>
                            <ul label="<?php echo $title ?>">
            <?php 
                    }
                }
                foreach ( $cate as $cid => $val ) {

                    /** // 暂时父级分类搜索不了 */
                    if ( isset( $cates[$cid] ) ) {
                        continue;
                    }

                    $title = CommonFunc::cut_str( $val['name'], 20, '' );
                    if($cid == $ccid){ ?>

                        <li  class='lival cur' value="<?php echo $cid ?>" title="<?php echo $val['name'] ?>">
                            <a style='color:red' href="<?php echo $this->createUrl("shop",array('sid'=>$data['sid'],'cid'=>$cid)) ?>" ><?php echo $val['name'] ?></a>
                        </li> 

            <?php   }else{ ?>

                        <li class='lival' value="<?php echo $cid ?>" title="<?php echo $val['name'] ?>">
                            <a href="<?php echo $this->createUrl("shop",array('sid'=>$data['sid'],'cid'=>$cid)) ?>" ><?php echo $title ?></a>
                        </li>    
            <?php   }
                }
                if ( $pid != 0 ) {
                    if ( isset( $cates[0][$pid] ) ) {
                        echo"</ul></li>";
                    }
                }
            }
        }
        ?>
        </ul>
        </div>
        <div class="shop_info">
            <span class="shop_va">
                <img src="https://gtms01.alicdn.com/tps/i1/TB1NYpMFVXXXXXsXFXXFHLvIVXX-198-45.png">
            </span>
            <ul>
                <li><span style="font-weight:bold;color:#3F3E3E;"><?php echo $data['title'] ?></span></li>
                <li class="xinyu">
                    <span style="padding-top:5px;">
                    <span style="width:30px;float:left;">信誉:</span>
                    <?php for($i=0;$i<$star['num'];$i++){ ?>
                        <i class="star<?php echo $star['level']?>"></i>
                    <?php } ?>
                    <i class="clear"></i>
                    </span>
                </li>
                <li>掌柜:<?php echo $data['nick'] ?></li>
                <li class="wangwang">联系:
                <a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $data['nick'] ?>&siteid=cntaobao&status=1&charset=utf-8"><img border="0" src="http://amos.alicdn.com/realonline.aw?v=2&uid=<?php echo $data['nick'] ?>&site=cntaobao&s=1&charset=utf-8" alt="点击这里给我发消息" /></a>
                </li>
                <li class="shop_honor">
                    <div><span>描述</span><span class="score"><?php echo $data['item_score'] ?></span></div>
                    <div><span>服务</span><span class="score"><?php echo $data['service_score'] ?></span></div>
                    <div><span>物流</span><span class="score"><?php echo $data['delivery_score'] ?></span></div>
                </li>
                <li class="shop_in">
                    <span><a href="http://shop<?php echo $data['sid']?>.taobao.com" target="_blank">进入店铺</a></span>
                    <span><a href="http://shop<?php echo $data['sid']?>.taobao.com" target="_blank">收藏店铺</a></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="content_r">
        <div class="list_tip">
            <span class="list_title"><h4>宝贝列表</h4></span>
            <span class="list_more"><h4><a href="<?php echo $this->createUrl('item',array('sid'=>$data['sid'])) ?>" target="_blank">更多&gt;&gt;</a></h4></span>
        </div>
        <div class="item_list">
            <?php if(!empty($data['item'])){ ?>
            <?php foreach ($data['item'] as $key => $value) { ?>
            <dl class="item <?php if(($key+1)%3 == 0) echo 'last' ?>">
                <dt class="photo">
                    <a href="http://item.taobao.com/item.htm?id=<?php echo $value['iid'] ?>" target="_blank"><img src="<?php echo $value['pic_url'] ?>"></a>
                </dt>
                <dd class="detail">
                    <a href="http://item.taobao.com/item.htm?id=<?php echo $value['iid'] ?>" target="_blank"><?php echo $value['title'] ?></a><br/>
                    <span>￥<font class="pfont"><?php echo $value['price'] ?></font></span>
                </dd>
            </dl>
            <?php } ?>
            <?php }else{ ?>
                <div style='width:200px;margin:0 auto;text-align:center;margin-top:20px;color:red;'>
                    没有相关宝贝信息！
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
