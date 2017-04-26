<?php $this->pageTitle = '上海弘钢机械设备有限公司-'.$info->name?>
<div class="npagePage post">
            <div id="pageTarget" class="module">
                <div class="module_container">
                    <div class="container_target wow">您的位置：<a href="<?=$this->createUrl('/home/index/index')?>">首页</a><i class="fa fa-angle-right"></i><a href="<?=$this->createUrl('/home/product/list')?>">设备列表</a><i class="fa fa-angle-right"></i><a href="#"><?=$info->name?></a></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="content">
                <div class="mlistpost project module">
                    <div class="module_container">
                        <div class="container_content">
                            <div class="content_wrapper">
                                <div id="postWrapper">
                                    <div id="postInfo">
                                        <div class="wrapper scrollFixed" data-sf-top="20">
                                            <p class="title">项目参数</p>
                                            <p class="subtitle">仅供参考</p>
                                            <div class="description">
                                            <?=$info->cs?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="postContent">
                                        <div class="postbody">
                                        <img src="<?=ImageTools::fixImage($info->image,600,400)?>">
                                        
                                        <?=$info->td?>
                                        </div>
                                        <div class="clear"></div>
                                        <div id="listContent">
                                            <div class="item_tags"><i class="fa fa-tags"></i><a href="<?=$this->createUrl('/home/product/list',['cid'=>$info->cid])?>" target="_blank">同类型设备服务</a></div>
                                            <div class="mlist project">
                                                <div class="content_wrapper">
                                                    <ul class="content_list">
                                                    <?php $infos = ProductExt::model()->normal()->findAll(['condition'=>'cid=:cid','params'=>[':cid'=>$info->cid]]);?>
                                                        <?php if($infos) foreach ($infos as $key => $value) { if($value->id!=$info->id){?>
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
                                                             <?php } }?>
                                                    </ul>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>