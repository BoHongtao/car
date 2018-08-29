<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/8/6
 * Time: 11:02
 */
?>
<link rel="stylesheet" type="text/css" href="static/css/reset.css">
<div class="search_bar clearfix">
    <a href="index.html" class="logo fl"><img src="static/images/logo.png"></a>
    <div class="search_con fl">
        <input type="text" class="input_text fl" name="" placeholder="搜索商品">
        <input type="button" class="input_btn fr" name="" value="搜索">
    </div>
    <div class="guest_cart fr">
        <a href="#" class="cart_name fl">我的购物车</a>
        <div class="goods_count fl" id="show_count">1</div>
    </div>
</div>
<div class="navbar_con">
    <div class="navbar">
        <h1 class="fl">全部商品分类</h1>
        <ul class="navlist fl">
            <li><a href="">首页</a></li>
            <li class="interval">|</li>
            <li><a href="">手机生鲜</a></li>
            <li class="interval">|</li>
            <li><a href="">抽奖</a></li>
        </ul>
    </div>
</div>

<div class="center_con clearfix">
    <ul class="subnav fl">
        <?php foreach ($good_type as $k=>$v): ?>
            <li><a href="#model01" class="<?=$v['logo']?>"><?= $v['type'] ?></a></li>
<!--            <li><a href="#model02" class="seafood">海鲜水产</a></li>-->
<!--            <li><a href="#model03" class="meet">猪牛羊肉</a></li>-->
<!--            <li><a href="#model04" class="egg">禽类蛋品</a></li>-->
<!--            <li><a href="#model05" class="vegetables">新鲜蔬菜</a></li>-->
<!--            <li><a href="#model06" class="ice">速冻食品</a></li>-->
        <?php endforeach; ?>
    </ul>
    <div class="slide fl">
        <ul class="slide_pics">
            <?php foreach ($sowing_map as $k=>$v):?>
                <li><img src="<?= showPic($v['pic']) ?>" alt="轮播图"></li>
            <?php endforeach; ?>
        </ul>
        <div class="prev"></div>
        <div class="next"></div>
        <ul class="points"></ul>
    </div>
    <div class="adv fl">
        <a href="#"><img src="static/images/adv01.jpg"></a>
        <a href="#"><img src="static/images/adv02.jpg"></a>
    </div>
</div>

<div class="list_model">
    <div class="list_title clearfix">
        <h3 class="fl" id="model01">新鲜水果</h3>
        <div class="subtitle fl">
            <span>|</span>
            <a href="#">鲜芒</a>
            <a href="#">加州提子</a>
            <a href="#">亚马逊牛油果</a>
        </div>
        <a href="#" class="goods_more fr" id="fruit_more">查看更多 ></a>
    </div>

    <div class="goods_con clearfix">
        <div class="goods_banner fl"><img src="static/images/banner01.jpg"></div>
        <ul class="goods_list fl">
            <li>
                <h4><a href="#">草莓</a></h4>
                <a href="#"><img src="static/images/goods/goods003.jpg"></a>
                <div class="prize">¥ 30.00</div>
            </li>
            <li>
                <h4><a href="#">葡萄</a></h4>
                <a href="#"><img src="static/images/goods/goods002.jpg"></a>
                <div class="prize">¥ 5.50</div>
            </li>
            <li>
                <h4><a href="#">柠檬</a></h4>
                <a href="#"><img src="static/images/goods/goods001.jpg"></a>
                <div class="prize">¥ 3.90</div>
            </li>
            <li>
                <h4><a href="#">奇异果</a></h4>
                <a href="#"><img src="static/images/goods/goods012.jpg"></a>
                <div class="prize">¥ 25.80</div>
            </li>
        </ul>
    </div>
</div>

<div class="list_model">
    <div class="list_title clearfix">
        <h3 class="fl" id="model02">海鲜水产</h3>
        <div class="subtitle fl">
            <span>|</span>
            <a href="#">河虾</a>
            <a href="#">扇贝</a>
        </div>
        <a href="#" class="goods_more fr">查看更多 ></a>
    </div>

    <div class="goods_con clearfix">
        <div class="goods_banner fl"><img src="static/images/banner02.jpg"></div>
        <ul class="goods_list fl">
            <li>
                <h4><a href="#">青岛野生海捕大青虾</a></h4>
                <a href="#"><img src="static/images/goods/goods018.jpg"></a>
                <div class="prize">¥ 48.00</div>
            </li>
            <li>
                <h4><a href="#">扇贝</a></h4>
                <a href="#"><img src="static/images/goods/goods019.jpg"></a>
                <div class="prize">¥ 46.00</div>
            </li>
            <li>
                <h4><a href="#">冷冻秋刀鱼</a></h4>
                <a href="#"><img src="static/images/goods/goods020.jpg"></a>
                <div class="prize">¥ 19.00</div>
            </li>
            <li>
                <h4><a href="#">基围虾</a></h4>
                <a href="#"><img src="static/images/goods/goods021.jpg"></a>
                <div class="prize">¥ 25.00</div>
            </li>
        </ul>
    </div>
</div>

<div class="list_model">
    <div class="list_title clearfix">
        <h3 class="fl" id="model03">猪牛羊肉</h3>
        <div class="subtitle fl">
            <span>|</span>
            <a href="#">鲜芒</a>
            <a href="#">加州提子</a>
            <a href="#">亚马逊牛油果</a>
        </div>
        <a href="#" class="goods_more fr">查看更多 ></a>
    </div>

    <div class="goods_con clearfix">
        <div class="goods_banner fl"><img src="static/images/banner03.jpg"></div>
        <ul class="goods_list fl">
            <li>
                <h4><a href="#">维多利亚葡萄维多利亚葡萄维多利亚葡萄维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
        </ul>
    </div>
</div>

<div class="list_model">
    <div class="list_title clearfix">
        <h3 class="fl" id="model04">禽类蛋品</h3>
        <div class="subtitle fl">
            <span>|</span>
            <a href="#">鲜芒</a>
            <a href="#">加州提子</a>
            <a href="#">亚马逊牛油果</a>
        </div>
        <a href="#" class="goods_more fr">查看更多 ></a>
    </div>

    <div class="goods_con clearfix">
        <div class="goods_banner fl"><img src="static/images/banner04.jpg"></div>
        <ul class="goods_list fl">
            <li>
                <h4><a href="#">维多利亚葡萄维多利亚葡萄维多利亚葡萄维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
        </ul>
    </div>
</div>

<div class="list_model">
    <div class="list_title clearfix">
        <h3 class="fl" id="model05">新鲜蔬菜</h3>
        <div class="subtitle fl">
            <span>|</span>
            <a href="#">鲜芒</a>
            <a href="#">加州提子</a>
            <a href="#">亚马逊牛油果</a>
        </div>
        <a href="#" class="goods_more fr">查看更多 ></a>
    </div>

    <div class="goods_con clearfix">
        <div class="goods_banner fl"><img src="static/images/banner05.jpg"></div>
        <ul class="goods_list fl">
            <li>
                <h4><a href="#">维多利亚葡萄维多利亚葡萄维多利亚葡萄维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
        </ul>
    </div>
</div>

<div class="list_model">
    <div class="list_title clearfix">
        <h3 class="fl" id="model06">速冻食品</h3>
        <div class="subtitle fl">
            <span>|</span>
            <a href="#">鲜芒</a>
            <a href="#">加州提子</a>
            <a href="#">亚马逊牛油果</a>
        </div>
        <a href="#" class="goods_more fr">查看更多 ></a>
    </div>

    <div class="goods_con clearfix">
        <div class="goods_banner fl"><img src="static/images/banner06.jpg"></div>
        <ul class="goods_list fl">
            <li>
                <h4><a href="#">维多利亚葡萄维多利亚葡萄维多利亚葡萄维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
            <li>
                <h4><a href="#">维多利亚葡萄</a></h4>
                <a href="#"><img src="static/images/goods.jpg"></a>
                <div class="prize">¥ 38.00</div>
            </li>
        </ul>
    </div>
</div>

<?php $this->beginBlock('script'); ?>
<script type="text/javascript" src="static/js/slide.js"></script>
<script type="text/javascript">
//    BCSlideshow('focuspic');
    var oFruit = document.getElementById('fruit_more');
    var oShownum = document.getElementById('show_count');

    var hasorder = localStorage.getItem('order_finish');

    if(hasorder)
    {
        oShownum.innerHTML = '2';
    }

    oFruit.onclick = function(){
        window.location.href = 'list.html';
    }
</script>
<?php $this->endBlock(); ?>
