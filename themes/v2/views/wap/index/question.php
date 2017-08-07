<?php $this->pageTitle = '二次元建议' ?>
<!doctype html>
<html class="effect">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta name="author" content="UEMO">
    <link type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/css/bxslider.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/css/animate.min.css">
    <link type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/css/376m.css">
  <title><?php echo $this->pageTitle;?></title>
</head>

<body class="<?=$this->banner?>">
    <div id="sitecontent" class="transform">
        <div id="header">
            <div id="openlc" class="fl btn">
                <div class="lcbody">
                    <div class="lcitem top">
                        <div class="rect top"></div>
                    </div>
                    <div class="lcitem bottom">
                        <div class="rect bottom"></div>
                    </div>
                </div>
            </div>
            <a id="logo" href="<?=$this->createUrl('/')?>"><img src="<?=ImageTools::fixImage('http://img.25pp.com/uploadfile/app/icon/20160402/1459565543856835.jpg')?>" /></a>
        </div>
        <div class="scrollView">
            <div class="npagePage">
    <div class="content">
        <div id="projectpost">
            <div class="header">
                <p class="title">请填写关于二次元最感兴趣的三个关键词 <br>
                希望大家踊跃发言哦~~</p>
            </div>
            <ul id="projectimages" class="plr5">
            <li><img src="http://okwfe8mj2.bkt.clouddn.com/2017/0629/1498741917401576092.png" class="imgcw" /></li>
            </ul>
            <div class="clear"></div>
            <div class="postbody plr10">
                <div id="contactform" class="" data-wow-delay=".2s">
                            <form id="f1" method="post" onsubmit="alert('提交成功')">
                                <p>
                                    <input style="color:grey" id="pname" type="text" class="inputtxt name" name="ErExt[w1]" placeholder="关键词1" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <input style="color:grey" id="pname" type="text" class="inputtxt name" name="ErExt[w2]" placeholder="关键词2" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <input style="color:grey" id="pname" type="text" class="inputtxt name" name="ErExt[w3]" placeholder="关键词3" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <input style="color:grey" id="" type="text" class="inputtxt name" name="ErExt[note]" placeholder="其他建议" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <input style="color:grey" type="text" class="inputtxt email" name="ErExt[name]" placeholder="姓名（可匿名）" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <input style="color:grey" id="pphone" type="text" class="inputtxt tel" name="ErExt[contact]" placeholder="联系方式（方便单独交流）" autocomplete="off" />
                                </p>
                                <hr>
                                <p>
                                    <a onclick="alert('Bingo~~');document.getElementById('f1').submit()">提交</a>
                                </p>
                            </form>
                        </div>
                
                </p>
            </div>
        </div>
        <div id="pages"></div>
    </div>
</div>
            <div id="footer">
                <p class="plr10"><span>COPYRIGHT (©) 2017  Tivon.</span>
                    <a class="beian" href="http://www.miitbeian.gov.cn/" style="display:inline; width:auto; color:#8e8e8e" target="_blank"></a>
                </p>
            </div>
            <div id="bgmask" class="iPage hide">
                <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261416854'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261416854' type='text/javascript'%3E%3C/script%3E"));</script>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
    var YYConfig = {};
    </script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/js/zepto.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/js/zepto.bxslider.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/js/wow.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/js/masonry_4.min.js"></script>
    <script type="text/javascript">
    $(function() {
        new WOW({
            scrollContainer: ".scrollView"
        }).init();
    })
    </script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/vip/wap/js/org.min.js" data-main="<?=$this->banner?'baseMain':'indexMain'?>"></script>
    <div class="hide"></div>

<script type="text/javascript">
$(document).ready(function(e) {
    var img = $(".slider_img img")[0];

    function sliderChulaiba() {
        $('#t-slider').bxSlider({
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>',
            auto: 0,
            infiniteLoop: true,
            hideControlOnEnd: true,
        });
    }
    if (img.complete) sliderChulaiba();
    else $(".slider_img img")[0].onload = function(e) {
        sliderChulaiba();
    };
});
$('.lcbody').click(function(){
        if($('body').attr('class') != 'open')
            $('body').attr('class','open');
        else
            $('body').attr('class','');
    });
</script>
</body>

</html>
