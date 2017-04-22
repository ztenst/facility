<?php
class IndexController extends HomeController
{
    public function actionIndex()
    {
        $this->banner = 'gh1';
    	$this->layout = '/layouts/base';
    	// 六个服务
    	$serves = ArticleExt::model()->normal()->findAll(['condition'=>'cid=44','limit'=>6]);
    	// 八个设备
    	$products = ProductExt::model()->normal()->findAll(['limit'=>8]);
        $this->render('index',['serves'=>$serves,'products'=>$products]);
    }
}
