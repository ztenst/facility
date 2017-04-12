<?php
class IndexController extends HomeController
{
    public function actionIndex()
    {
        $this->banner = '';
    	echo 'Hello!This is Tivon.';exit;
        $this->render('index',[]);
    }
}
