<?php
class IndexController extends HomeController
{
    public function actionIndex()
    {
        $this->banner = '';
    	$this->layout = '/layouts/base';
    	
        $this->render('index',[]);
    }
}
