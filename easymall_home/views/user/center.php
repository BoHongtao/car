<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/9/18
 * Time: 11:12
 */
?>

<link rel="stylesheet" type="text/css" href="static/css/reset.css">
<div class="search_bar clearfix">
    <a href="index.html" class="logo fl"><img src="static/images/logo.png"></a>
    <div class="sub_page_name fl">|&nbsp;&nbsp;&nbsp;&nbsp;用户中心</div>
    <div class="search_con fr">
        <input type="text" class="input_text fl" name="" placeholder="搜索商品">
        <input type="button" class="input_btn fr" name="" value="搜索">
    </div>
</div>

<div class="main_con clearfix">
    <div class="left_menu_con clearfix">
        <h3>用户中心</h3>
        <ul>
            <li><a href="user_center_info.html" class="active">· 个人信息</a></li>
            <li><a href="user_center_order.html">· 全部订单</a></li>
            <li><a href="user_center_site.html">· 收货地址</a></li>
        </ul>
    </div>
    <div class="right_content clearfix">
        <div class="info_con clearfix">
            <h3 class="common_title2">基本信息
<!--                <span style="font-size:13px"><a href="#">更多</a></span>-->
            </h3>
            <ul class="user_info_list">
                <li><span>用户名：</span><?= $userInfo[0]['username']?></li>
                <li><span>联系方式：</span><?= $userInfo[0]['phone'] ?></li>
                <li><span>联系地址：</span><?= $userInfo[0]['user_add'] ?></li>
            </ul>
        </div>

        <h3 class="common_title2">最近浏览</h3>
        <div class="has_view_list">
            <ul class="goods_type_list clearfix">
                <li>
                    <a href="detail.html"><img src="static/images/goods/goods003.jpg"></a>
                    <h4><a href="detail.html">大兴大棚草莓</a></h4>
                    <div class="operate">
                        <span class="prize">￥16.80</span>
                        <span class="unit">16.80/500g</span>
                        <a href="#" class="add_goods" title="加入购物车"></a>
                    </div>
                </li>

                <li>
                    <a href="#"><img src="static/images/goods/goods004.jpg"></a>
                    <h4><a href="#">吐鲁番梨光杏</a></h4>
                    <div class="operate">
                        <span class="prize">￥5.50</span>
                        <span class="unit">5.50/500g</span>
                        <a href="#" class="add_goods" title="加入购物车"></a>
                    </div>
                </li>

                <li>
                    <a href="#"><img src="static/images/goods/goods005.jpg"></a>
                    <h4><a href="#">黄肉桃</a></h4>
                    <div class="operate">
                        <span class="prize">￥10.00</span>
                        <span class="unit">10.00/500g</span>
                        <a href="#" class="add_goods" title="加入购物车"></a>
                    </div>
                </li>

                <li>
                    <a href="#"><img src="static/images/goods/goods006.jpg"></a>
                    <h4><a href="#">进口西梅</a></h4>
                    <div class="operate">
                        <span class="prize">￥28.80</span>
                        <span class="unit">28.8/500g</span>
                        <a href="#" class="add_goods" title="加入购物车"></a>
                    </div>
                </li>

                <li>
                    <a href="#"><img src="static/images/goods/goods007.jpg"></a>
                    <h4><a href="#">香梨</a></h4>
                    <div class="operate">
                        <span class="prize">￥6.45</span>
                        <span class="unit">6.45/500g</span>
                        <a href="#" class="add_goods" title="加入购物车"></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
