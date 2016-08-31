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
                    if($cid == $ccid){ 
            ?>

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
    </div>

    <div class="content_r">
        <div class="list_tip">
            <span class="list_title"><h4>宝贝列表</h4></span>
        </div>
        <div class="item_list">
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
            <dl class="clear"></dl>
        </div>
        <div class="page">
            <?php if($page == 1){ ?>
                <a disabled="disabled">首页</a>
                <a disabled="disabled">上一页</a>
            <?php }else{ ?>
                <a href="<?php echo $this->createUrl('item',array('sid'=>$data['sid'],'page'=>1)) ?>">首页</a>
                <a href="<?php echo $this->createUrl('item',array('sid'=>$data['sid'],'page'=>$page-1)) ?>">上一页</a>
            <?php } ?>
            <?php 
                $pages = $data['sum'];
                $s_page = $page-4>0?$page-4:1;
                $e_page = $page+5>$pages?$pages:$page+5;
                for($i=$s_page;$i<=$e_page;$i++){
                    if($i == $page){ ?>
                        <a class='page_cur' disabled="disabled" href="<?php echo $this->createUrl('item',array('sid'=>$data['sid'],'page'=>$i)) ?>"><?php echo $i; ?></a>
                    <?php }else{ ?> 
                        <a class="page_n" href="<?php echo $this->createUrl('item',array('sid'=>$data['sid'],'page'=>$i)) ?>"><?php echo $i; ?></a>
            <?php }} ?>
            
            <?php if($pages == $page){ ?>
                <a disabled="disabled">下一页</a>
                <a disabled="disabled">尾页</a>
            <?php }else{ ?>
               <a href="<?php echo $this->createUrl('item',array('sid'=>$data['sid'],'page'=>$page+1)) ?>">下一页</a>
                <a href="<?php echo $this->createUrl('item',array('sid'=>$data['sid'],'page'=>$pages)) ?>">尾页</a>
            <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
