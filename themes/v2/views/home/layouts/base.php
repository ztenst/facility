<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="agent-pc theme-wblue">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="baidu-site-verification" content="9WmCoMNV8v" />
    <meta name="baidu-site-verification" content="lcW2s9Pkpk" />
    <meta name="keywords" content="<?=$this->keyword?>">
    <meta name="description" content="<?=$this->description?>">
    <meta name="author" content="YY-MO">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/lib.css">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/style.1400.css">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/wblue.css" id="themeCssPath">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/1400.css">
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/home/js/org.1487311756.js" data-main="<?=$this->banner?'baseMain':'indexMain'?>"></script>
    <title><?php echo $this->pageTitle; ?></title>
    <style type="text/css">
        a[href="http://www.uemo.net"]{display:none}
        #sitecontent{
            padding-top: 86px
        }
    </style>
</head>

<body class="<?=$this->banner?>">
<div id="header" class="<?=$this->banner?'':'index_nav'?>">
        <div class="wrapper">
            <div class="content">
                <div id="headTop">
                    <a href="<?=$this->createUrl('/home/index/index')?>" id="logo" style="height: 70px;margin-top: -16px"><img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'))?>" width="220" height="40" /></a>
                    <div id="hcontact" class="fr"><i class="fa fa-phone"></i>
                        <p><?=SiteExt::getAttr('qjpz','sitePhone').' 021-62609991'?>
                            <br /><a href="<?=SiteExt::getAttr('qjpz','mail')?>"><?=SiteExt::getAttr('qjpz','mail')?></a></p>
                    </div>
                    <div id="openBtn" class="fl btn">
                        <div class="lcbody">
                            <div class="lcitem top">
                                <div class="rect top"></div>
                            </div>
                            <div class="lcitem bottom">
                                <div class="rect bottom"></div>
                            </div>
                        </div>
                    </div>
                </div><?php $path = trim(Yii::app()->request->getPathInfo(),'/');?>
                <div id="navWrapper">
                    <div class="content">
                        <p class="search_but" style="display:none"><i class="fa fa-search" aria-hidden="true"></i></p>
                        <ul class="nav movedx" data-movedx-mid="1">
                            <li class="navitem"><a class="<?=$path=='home/index/index'?'active':''?>" href="<?=$this->createUrl('/home/index/index')?>" target="_self"><span data-title="首页">首页</span></a></li>
                            <li class="navitem"><a class="<?=$path=='home/serve/index'?'active':''?>" href="<?=$this->createUrl('/home/serve/index')?>" target="_self"><span data-title="服务中心">服务中心</span></a></li>
                            <li class="navitem"><a class="<?=$path=='home/serve/info'?'active':''?>"  href="<?=$this->createUrl('/home/serve/info')?>" target="_self"><span data-title="业务中心">业务中心</span></a></li>
                            <li class="navitem"><a class="<?=$path=='home/product/list'?'active':''?>" href="<?=$this->createUrl('/home/product/list')?>" target="_self"><span data-title="设备中心">设备中心</span></a></li>
                            <li class="navitem"><a href="javascript:;" target=""><span data-title="关于我们">关于我们</span><i class="fa fa-angle-down"></i></a>
                                <ul class="subnav">
                                    <li><a href="<?=$this->createUrl('/home/index/about')?>" target="_self">集团简介</a></li>
                                    <li><a href="<?=$this->createUrl('/home/index/contact')?>" target="_self"><span data-title="联系我们">联系我们</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="search" style="display:none">
                    <div class="s_content">
                        <form>
                            <div class="s_wrapper">
                                <p class="s_submit"><i class="fa fa-search" aria-hidden="true"></i></p>
                                <input type="text" aria-label="搜索" placeholder="搜索" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" />
                                <p class="s_close"><i class="fa fa-times" aria-hidden="true"></i></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sitecontent">
    <?=$content?>
    </div>
    <div id="footer">
        <p><span class="ellipsis">COPYRIGHT (©) 2017  上海弘钢机械设备有限公司. </span>
            <a class="beian" href="http://www.miitbeian.gov.cn/" style="color: #363636;vertical-align: top;margin-left: 10px;display: inline-block;" target="_blank">沪ICP备17041746号</a>
        </p>
    </div>
    <div id="shares"><a href="http://service.weibo.com/share/share.php?appkey=3206975293&" target="_blank" id="sweibo"><i class="fa fa-weibo"></i></a><a href="javascript:;" id="gotop"><i class="fa fa-angle-up"></i></a></div>
    <div id="online_open"><i class="fa fa-comments-o"></i></div>
    <div id="online_lx">    
        <div id="olx_head">在线咨询<i class="fa fa-times fr" id="online_close"></i></div>
        <ul id="olx_qq">
            <li><a href="tencent://message/?uin=<?=SiteExt::getAttr('qjpz','qq')?>&Site=uelike&Menu=yes"><i class="fa fa-qq"></i><?=SiteExt::getAttr('qjpz','qq')?></a></li>
        </ul>
        <div id="olx_tel">
            <div><i class="fa fa-phone"></i>联系电话</div>
            <p><?=SiteExt::getAttr('qjpz','sitePhone')?>
                <br />
            </p>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        // debugger;
                $('.hide').next().remove();
            });
</script>

</html>
