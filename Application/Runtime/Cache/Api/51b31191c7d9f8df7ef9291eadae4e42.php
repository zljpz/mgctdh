<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>接口测试页面</title>
</head>
<style>
    form input{
        width: 80px;
    }
</style>
<body>
    <h1>接口测试</h1>
    <strong style="color: red;"> 1.发送短信验证码/Api/User/sendVCode</strong><br/>
    <form action="/mgctdh/Api/User/sendVCode" method="post">
        phone：<input type="text" name="phone" value=""/>
        type:
        <select name="type">
            <option value="0">0:注册</option>
            <option value="1">1:找回密码</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 2.登录/Api/User/userLogin</strong><br/>
    <form action="/mgctdh/Api/User/userLogin" method="post">
        account：<input type="text" name="account" value=""/>
        v_code：<input type="text" name="v_code" value=""/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 3.获取商家列表/Api/Merchant/merchantList</strong><br/>
    <form action="/mgctdh/Api/Merchant/merchantList" method="post">
        page：<input type="text" name="page" value="1"/>
        lat：<input type="text" name="lat" value=""/>
        lng：<input type="text" name="lng" value=""/>
        sort_by：
        <select name="sort_by">
            <option value="0">0:distance</option>
            <option value="1">1:popularity</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 4.商家详情/Api/Merchant/merchantDetails</strong><br/>
    <form action="/mgctdh/Api/Merchant/merchantDetails" method="post">
        accesstoken：<input type="text" name="accesstoken" value=""/>
        merchant_id：<input type="text" name="merchant_id" value=""/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 5.商家图册/Api/Merchant/merchantImages</strong><br/>
    <form action="/mgctdh/Api/Merchant/merchantImages" method="post">
        merchant_id：<input type="text" name="merchant_id" value=""/>
        page：<input type="text" name="page" value="1"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 6.菜品列表/Api/Merchant/foodsVoteList</strong><br/>
    <form action="/mgctdh/Api/Merchant/foodsVoteList" method="post">
        merchant_id：<input type="text" name="merchant_id" value=""/>
        page：<input type="text" name="page" value="1"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 7.问答列表/Api/Merchant/qaList</strong><br/>
    <form action="/mgctdh/Api/Merchant/qaList" method="post">
        merchant_id：<input type="text" name="merchant_id" value=""/>
        page：<input type="text" name="page" value="1"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 8.问答详情/Api/Merchant/qaDetails</strong><br/>
    <form action="/mgctdh/Api/Merchant/qaDetails" method="post">
        qa_id：<input type="text" name="qa_id" value=""/>
        page：<input type="text" name="page" value="1"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 9.获取用户信息/Api/User/getUserInfo</strong><br/>
    <form action="/mgctdh/Api/User/getUserInfo" method="post">
        accesstoken：<input type="text" name="accesstoken" value=""/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 9.获取前缀/Api/Index/getPrefix</strong><br/>
    <form action="/mgctdh/Api/Index/getPrefix" method="post">
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 10.提交意见反馈/Api/Index/addOpinion</strong><br/>
    <form action="/mgctdh/Api/Index/addOpinion" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        opinion:<input type="text" name="opinion"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 11.提交餐厅建议/Api/Index/updateRestaurant</strong><br/>
    <form action="/mgctdh/Api/Index/updateRestaurant" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        merchant_name:<input type="text" name="merchant_name"/>
        description:<input type="text" name="description"/>
        image_str:<input type="text" name="image_str"/>
        type:
        <select name="type">
            <option value="0">0:添加</option>
            <option value="1">1:关闭</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 12.用户签到/Api/User/userSign</strong><br/>
    <form action="/mgctdh/Api/User/userSign" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        merchant_id:<input type="text" name="merchant_id"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 13.餐厅签到好友列表/Api/User/mFriendSignList</strong><br/>
    <form action="/mgctdh/Api/User/mFriendSignList" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        merchant_id:<input type="text" name="merchant_id"/>
        page:<input type="text" name="page" value="1"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 14.更新餐厅等待时间/Api/Merchant/updateWaitTime</strong><br/>
    <form action="/mgctdh/Api/Merchant/updateWaitTime" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        merchant_id:<input type="text" name="merchant_id"/>
        wait_time:<input type="text" name="wait_time" value=""/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 15.更新餐厅信息描述/Api/Merchant/updateDescription</strong><br/>
    <form action="/mgctdh/Api/Merchant/updateDescription" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        merchant_id:<input type="text" name="merchant_id"/>
        description:<input type="text" name="description" value=""/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong style="color: red;"> 16.举报餐厅信息描述/Api/Merchant/reportDescription</strong><br/>
    <form action="/mgctdh/Api/Merchant/reportDescription" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        merchant_id:<input type="text" name="merchant_id"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 17.更新心情/Api/Merchant/updateEmoji</strong><br/>
    <form action="/mgctdh/Api/Merchant/updateEmoji" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        merchant_id:<input type="text" name="merchant_id"/>
        type:
        <select name="type">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 18.上传餐厅图册/Api/Merchant/uploadMerchantPhoto</strong><br/>
    <form action="/mgctdh/Api/Merchant/uploadMerchantPhoto" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        merchant_id:<input type="text" name="merchant_id"/>
        image:<input type="text" name="image"/>
        introduce:<input type="text" name="introduce"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 19.获取菜品原料标签/Api/Merchant/getFoodsAllergens</strong><br/>
    <form action="/mgctdh/Api/Merchant/getFoodsAllergens" method="post">
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 20.获取菜品营养标签/Api/Merchant/getFoodsDiets</strong><br/>
    <form action="/mgctdh/Api/Merchant/getFoodsDiets" method="post">
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
    <strong> 21.发布/编辑菜品投票/Api/Merchant/addEditFoodsVote</strong><br/>
    <form action="/mgctdh/Api/Merchant/addEditFoodsVote" method="post">
        accesstoken:<input type="text" name="accesstoken"/>
        foods_vote_id:<input type="text" name="foods_vote_id"/>
        merchant_id:<input type="text" name="merchant_id"/>
        foods_name:<input type="text" name="foods_name"/>
        foods_price:<input type="text" name="foods_price"/>
        allergens_str:<input type="text" name="allergens_str"/>
        diets_str:<input type="text" name="diets_str"/>
        <input type="submit" value="提交">
    </form>
    <br/>
    <!-- ================================================================== -->
</body>
</html>