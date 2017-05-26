<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($collocation["title"]); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="/axd/Public/css/public.css">
    <link rel="stylesheet" href="/axd/Public/css/collocation.css">
    <script src="/axd/Public/js/jquery-1.12.4.js"></script>
    <style>
        .class_list{position: relative ;float: left;margin:0;padding:4px;}
        .class_list i{width:10px;height:10px;-webkit-border-radius:50%;-moz-border-radius:50%;
            border-radius:50%;background: #2b7dbc;z-index: 100;float: left;margin-left:-14px;margin-top:8px;}
        .class_list p{position: absolute;background: rgba(0,0,0,0.3);}
        .class_list p span{border:none;background: none;color: #fff;
            width:auto;display: block;padding: 8px;}
        .test{height: 600px; max-width: 600px; font-size: 40px;}
    </style>
</head>
<body>
<div class="header">
    <div class="logo">
        <img src="/axd/Public/img/logo_s.png" alt="">
        <div class="content">
            <h2>A梦校园</h2>
            <p>A梦校园</p>
        </div>
    </div>
    <div class="download">
        <a href="<?php echo ($tc_yyb); ?>">点击下载</a>
    </div>
</div>


<div class="box">
    <!--<img src="/axd<?php echo ($collocation["image"]); ?>" alt="">-->
    <div class="class_list">
        <img id="img_c" src="/axd<?php echo ($collocation["image"]); ?>">
    </div>
    <div class="content">
        <p><?php echo ($collocation["introduce"]); ?></p>
        <div class="label">
            <?php if(is_array($collocation['label_text'])): foreach($collocation['label_text'] as $key=>$l): ?><span><?php echo ($l); ?></span><?php endforeach; endif; ?>
        </div>
    </div>
</div>





<!--<div class="app">
    <img src="/axd/Public/img/logo_s.png" alt="">
    <p><strong>A梦校园</strong> <span>A梦校园</span></p>
    <a href="<?php echo ($tc_yyb); ?>">
        下载A梦校园 客户端查看更多
    </a>
</div>-->


<div class="footer">
    <div class="footer_box">
        <a href="<?php echo ($tc_yyb); ?>">下载A梦校园</a>
    </div>
</div>


</body>
<script>
    var MODULE = '/axd/Api';

//    $(function(){
//        var img_wid = $('.class_list img').width();
//        $('.class_list img').attr('height',img_wid*1.2+'px');
//
//        var id = "<?php echo ($_GET['id']); ?>";
//        $.post(MODULE+'/Collocation/getCGoodsNode',{'id':id},function(data){
//            var node_list = data.data;
//            $.each(node_list,function(k,v){
//                addNode(this.index_x,this.index_y,this.goods_text,this.goods_id);
//            });
//        });
//    });

    document.onreadystatechange = subSomething;
    function subSomething(){
        if(document.readyState == "complete"){
            var img_wid = $('.class_list img').width();
            $('.class_list img').attr('height',img_wid*1.2+'px');

            var id = "<?php echo ($_GET['id']); ?>";
            $.post(MODULE+'/Collocation/getCGoodsNode',{'id':id},function(data){
                var node_list = data.data;
                $.each(node_list,function(k,v){
                    addNode(this.index_x,this.index_y,this.goods_text,this.goods_id);
                });
            });
        }
    }



    var num = 0;
    //添加节点
    function addNode(xx,yy,goods_text,goods_id){


        xx = xx*$('.class_list img').width();
        yy = yy*$('.class_list img').height();

        var imgWidth = $('.class_list img').width()/2;
        var x2 = xx;
        $('.class_list').append(
                '<a href="javascript:clickIfWeixin('+goods_id+')">' +
                '<p class="num'+num+'"><i></i><span>'+goods_text+'</span></p></a>');
        if(xx > imgWidth){
            $('.class_list .num'+num+'').css({
                'left':xx,
                'top': yy
            });
        }else{
            $('.class_list .num'+num+' i').css({
                'float':'left',
                'margin-right':'-14px'
            });
            $('.class_list .num'+num+'').css({
                'left':xx,
                'top': yy
            });
        }
        num++;
    }
</script>
<script type="text/javascript">
    function is_weixin() {
        var ua = navigator.userAgent.toLowerCase();
        if (ua.match(/MicroMessenger/i) == "micromessenger") {
            return true;
        } else {
            return false;
        }
    }
    var isWeixin = is_weixin();
    var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;
    function loadHtml(){
        var div = document.createElement('div');
        div.id = 'weixin-tip';
        div.innerHTML = '<p><img style="width: 100%;" src="/axd/Public/img/live_weixin.png" alt="微信打开"/>111</p>';
        document.body.appendChild(div);
    }

    function loadStyleText(cssText) {
        var style = document.createElement('style');
        style.rel = 'stylesheet';
        style.type = 'text/css';
        try {
            style.appendChild(document.createTextNode(cssText));
        } catch (e) {
            style.styleSheet.cssText = cssText; //ie9以下
        }
        var head=document.getElementsByTagName("head")[0]; //head标签之间加上style样式
        head.appendChild(style);
    }
    var cssText = "#weixin-tip{position: fixed;z-index:999!important; left:0; top:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80); width: 100%; height:100%;} ";
    /*function clickIfWeixin(id){
        if(isWeixin){
            loadHtml();
            loadStyleText(cssText);
        }else{
            var ua = navigator.userAgent.toLowerCase();
            if (/iphone|ipad|ipod/.test(ua)) {
                window.location.href = 'kufengxfg://'+id;
            }else{
                window.location.href = 'axd://match/?id='+id;
            }
        }
    }*/

</script>


<script type="text/javascript">
    function clickIfWeixin(id){
        var browser = {
            versions: function () {
                var u = navigator.userAgent, app = navigator.appVersion;
                return {         //移动终端浏览器版本信息
                    trident: u.indexOf('Trident') > -1, //IE内核
                    presto: u.indexOf('Presto') > -1, //opera内核
                    webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                    gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                    mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                    iOS: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                    Android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器
                    iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
                    iPad: u.indexOf('iPad') > -1, //是否iPad
                    webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                };
            }(),
            language: (navigator.browserLanguage || navigator.language).toLowerCase()
        }

        if (browser.versions.mobile) { //判断是否是移动设备打开。browser代码在下面
            var ua = navigator.userAgent.toLowerCase();//获取判断用的对象
            if (ua.match(/MicroMessenger/i) == "micromessenger") {
                loadHtml();
                loadStyleText(cssText);
            }else if (ua.match(/WeiBo/i) == "weibo") {
                //在新浪微博客户端打开
                loadHtml();
                loadStyleText(cssText);
            }else if (ua.match(/QQ/i) == "qq") {
                //在QQ空间打开
                loadHtml();
                loadStyleText(cssText);
            }else if (browser.versions.ios) {
                //是否在IOS浏览器打开
                loadHtml();
                loadStyleText(cssText);
            }else if(browser.versions.android){
                //是否在安卓浏览器打开
                loadHtml();
                loadStyleText(cssText);
            }else{
                if (/iphone|ipad|ipod/.test(ua)) {
                    window.location.href = 'kufengxfg://'+id;
                }else{
                    window.location.href = 'axd://match/?id='+id;
                }
            }
        }else{
            if (/iphone|ipad|ipod/.test(ua)) {
                window.location.href = 'kufengxfg://'+id;
            }else{
                window.location.href = 'axd://match/?id='+id;
            }
        }
    }

</script>
</html>