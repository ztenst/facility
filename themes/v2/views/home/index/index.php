<?php
  $this->pageTitle = '弘钢机械设备-首页';
?>
<div id="sitecontent">
        <div id="navMini">
            <div id="navMiniTable">
                <div id="navMiniCell">
                    <ul class="nav">
                        <li class="navitem"><a class="active" href="http://mo005-1400.mo5.line1.uemo.net/" target="_self">首页</a></li>
                        <li class="navitem"><a href="http://mo005-1563.mo5.line1.jsmo.xin/" target="_blank">黑色单屏版</a></li>
                        <li class="navitem"><a href="http://mo005-1400.mo5.line1.uemo.net/list/id/11111/" target="_self">业务服务</a></li>
                        <li class="navitem"><a href="http://mo005-1400.mo5.line1.uemo.net/list/id/11061/" target="_self">项目案例</a></li>
                        <li class="navitem"><a href="javascript:;" target="">关于我们<i class="fa fa-angle-down"></i></a>
                            <ul class="subnav">
                                <li><a href="http://mo005-1400.mo5.line1.uemo.net/page/about/" target="_self">集团简介</a></li>
                                <li><a href="http://mo005-1400.mo5.line1.uemo.net/list/id/11283/" target="_self">合作伙伴</a></li>
                            </ul>
                        </li>
                        <li class="navitem"><a href="http://mo005-1400.mo5.line1.uemo.net/list/id/11067/" target="_self">资讯中心</a></li>
                        <li class="navitem"><a href="http://mo005-1400.mo5.line1.uemo.net/page/contact/" target="_self">联系我们</a></li>
                        <li class="search-but" style=" opacity:0"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
        $(function() {
            $('#navWrapper .search_but').click(function() {
                $("#search").show().animate({
                    left: 0,
                    opacity: 1
                }, 500);
                $("#navWrapper").hide();
                $("#headTop").hide();
            });
            $('#search .s_close').click(function() {
                $("#search").show().animate({
                    left: $("#search").width() * 1.2,
                    opcity: 0
                }, 500);
                $("#navWrapper").show();
                $("#headTop").show();
            });
        });
        </script>
        <div id="indexPage" data-scroll-ease="Expo.easeInOut" data-scroll-speed="1" data-control="0" data-control-wheel="0" data-singlescreen="0">
            <div id="topSlider" class="mslider module">
                <ul class="content_list"  style="height:527px">
                    <li>
                        <div class="item_bg image" data-thumb="http://resources.jsmo.xin/templates/upload/1400/201701/148436306592_80x80.jpg" style="background-image:url(http://resources.jsmo.xin/templates/upload/1400/201701/148436306592.jpg)"></div>
                        <a target="_blank">
                            <div class="description" style="vertical-align:middle; text-align:right">
                                <p class="title ellipsis">尺寸1920 X 580</p>
                                <p class="subtitle"><span style="color:#fff">全新的架构，更好的体验</span></p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="sliderArrow">
                    <div></div>
                </div>
            </div>
            <div class="mlist service module" style="">
                <div class="bgmask"></div>
                <div class="module_container">
                    <div class="container_header wow">
                        <p class="title">业务服务</p>
                        <p class="subtitle">/ SERVICE</p>
                    </div>
                    <div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15"><a href="<?=$this->createUrl('/home/serve/list')?>" class="active"><span>全部</span></a></div>
                    <div class="container_content">
                        <div class="content_wrapper slider" data-slider-num='3' data-slider-loop="1">
                            <ul class="content_list">
                            <?php if($serves) foreach($serves as $key=>$value) {?>
                                    <li id="item_block_<?=$key?>" class="item_block wow" style="animation-delay:.0s">
                                    <a href="<?=$this->createUrl('/home/serve/info',['id'=>$value->id])?>" class="item_img" target="_blank"><img src="<?=ImageTools::fixImage($value->image,370,200)?>" width="370px" height="200px" />
                                        <div class="item_mask">
                                            <div class="item_link_icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                                        </div>
                                    </a>
                                    <div class="item_wrapper">
                                        <div class="item_info">
                                            <p class="title ellipsis"><?=$value->title?></p>
                                            <div class="description"><?=Tools::u8_title_substr($value->desc,100)?></div>
                                        </div>
                                    </div>
                                </li>
                                 <?php }?>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="mcounter module" style="">
                <div class="bgmask"></div>
                <div id="counterBgdx" style="position:absolute; width:100%; height:100%"></div>
                <div class="module_container">
                    <div class="container_content">
                        <ul class="content_list">
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="1912">1912</span><span class="unit">年</span></p>
                                    <p class="title">成立</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="299">299</span><span class="unit">+</span></p>
                                    <p class="title">服务</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="999">999</span><span class="unit">+</span></p>
                                    <p class="title">项目</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="2016">2016</span><span class="unit">+</span></p>
                                    <p class="title">客户</p>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="mlist project module" style="">
                <div class="bgmask"></div>
                <div class="module_container">
                    <div class="container_header wow">
                        <p class="title">设备</p>
                        <p class="subtitle"> / Product</p>
                    </div>
                    <div class="container_category wow movedx" data-movedx-mid="2" data-movedx-distance="15"><?php if($cates = TagExt::getTagArrayByCate('hjlx')) foreach ($cates as $key => $value) {?>
                        <a href="<?=$this->createUrl('/home/product/list',['cate'=>$key])?>"><span><?=$value?></span></a>
                    <?php } ?></div>
                    <div class="container_content">
                        <div class="content_wrapper">
                            <ul class="content_list">
                            <?php if($products) foreach ($products as $key => $value) {?>
                                <li id="item_block_<?=$key?>" class="item_block wow" style="animation-delay:.0s">
                                    <a href="<?=$this->createUrl('/home/product/info',['id'=>$value->id])?>" class="item_img" target="_blank"><img src="<?=ImageTools::fixImage($value->image,280,200)?>" />
                                        <div class="item_mask"></div>
                                        <div class="item_link_icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="item_wrapper">
                                        <div class="item_info">
                                            <p class="title ellipsis"><?=$value->name?></p>
                                            <p class="subtitle ellipsis"><?=TagExt::getNameByTag($value->cid)?></p>
                                        </div>
                                    </div>
                                </li>
                             <?php } ?>
                                
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="mcustomize module bgShow bgParallax" style=" background-image:url(http://resources.jsmo.xin/templates/upload/1400/201701/1484030897347.jpg);">
                <div class="bgmask"></div>
                <div class="module_container">
                    <div class="container_content">
                        <div class="contentbody">
                            <div class="wrapper">
                                <div class="header wow">
                                    <p class="title">关于我们</p>
                                    <p class="subtitle">ABOUT US</p>
                                </div>
                                <div class="description wow">
                                    <p style="text-align: center;"><span style="font-size: 14px;">上海弘钢机械设备有限公司是一家专业从事机械设备科技领域的技术开发、技术咨询、技术转让、技术服务、建筑安装工程、机械设备租赁、汽车租赁、、机电成套设备销售、人力装卸服务及机电设备安装，建筑装饰装修建设工程设计施工一体化。</span></p>
                                    <p><span style="font-size: 14px;"><br/></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            
            <div class="mcustomize module bgShow bgParallax" style=" background-image:url(http://resources.jsmo.xin/templates/upload/1400/201612/1481793511357.jpg);">
                <div class="bgmask"></div>
                <div class="module_container">
                    <div class="container_content">
                        <div class="contentbody">
                            <div class="wrapper">
                                <div class="description wow">
                                    <p style="text-align: center;"><span style="font-size: 20px;"><br/></span></p>
                                    <p><span style="font-size: 20px;"><br/></span></p>
                                    <p style="text-align: center;"><span style="font-size: 24px; color: rgb(255, 255, 255);">如果你<strong> </strong></span><span style="font-size: 24px; color: rgb(255, 255, 255); text-decoration: none;">想要</span><span style="font-size: 24px; color: rgb(255, 255, 255);">更多的<span style="font-size: 24px; color: rgb(0, 176, 240);">了解</span>，请联系我们 <?=SiteExt::getAttr('qjpz','sitePhone')?></span>
                                    </p>
                                    <p style="text-align: center;"><span style="font-size: 12px; color: rgb(191, 191, 191);">If you want more understanding, please contact us</span>
                                        <br/>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div id="mcontact" class="module" style="">
                <div class="module_container">
                    <div class="container_header wow">
                        <p class="title">联系我们</p>
                        <p class="subtitle"> / CONTACT</p>
                    </div>
                    <div class="container_content">
                        <div class="content_wrapper">
                            <div id="contactlist">
                                <div id="contactinfo" class="wow">
                                    <h3 class="ellipsis">上海弘钢机械设备有限公司</h3>
                                    <p class="ellipsis">地址：海市四平路2158号国定·富庆大厦1305室</p>
                                    <p class="ellipsis">邮编：200433</p>
                                    <p class="ellipsis">电话：021-54746988</p>
                                    <p class="ellipsis">手机：13817785788</p>
                                    <p class="ellipsis">传真：021-34203188</p>
                                    <p class="ellipsis">邮箱：yanan_76@sina.com</p>
                                    <div><a class="fl" target="_blank" href="http://weibo.com/web"><i class="fa fa-weibo"></i></a><a class="fl" target="_blank" href="tencent://message/?uin=<?=SiteExt::getAttr('qjpz','qq')?> &Site=uemo&Menu=yes"><i class="fa fa-qq"></i></a> </div>
                                </div>
                                <div id="contactform" class="wow">
                                    <form action="" method="post">
                                        <p>
                                            <input type="text" class="inputtxt" name="name" placeholder="姓名" autocomplete="off" />
                                        </p>
                                        <p>
                                            <input type="text" class="inputtxt" name="email" placeholder="邮箱" autocomplete="off" />
                                        </p>
                                        <p>
                                            <input type="text" class="inputtxt" name="tel" placeholder="电话" autocomplete="off" />
                                        </p>
                                        <p>
                                            <textarea class="inputtxt" name="content" placeholder="内容" autocomplete="off"></textarea>
                                        </p>
                                        <p>
                                            <input class="inputtxt submit" type="submit" value="提交" />
                                        </p>
                                    </form>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>