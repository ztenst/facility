<?php
/**
 * 产品前台控制器
 */
class ProductController extends WapController{
	/**
	 * [actionList 产品列表]
	 * @param  string $cate  [description]
	 * @param  string $ptpz  [description]
	 * @param  string $house [description]
	 * @return [type]        [description]
	 */
	public function actionList($cate='')
	{
		$criteria = new CDbCriteria;
		$criteria->order = 'sort desc,updated desc';
		$criteria->addCondition('status=1 and deleted=0');
		if($cate){
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		$infos = ProductExt::model()->normal()->getList($criteria,20);
		$data = $infos->data;
		$pager = $infos->pagination;
		$this->render('list',['infos'=>$data,'pager'=>$pager,'cate'=>$cate]);
	}
	/**
	 * [actionInfo 产品详情]
	 * @param  string $id [description]
	 * @return [type]     [description]
	 */
	public function actionInfo($id='')
	{
		$info = ProductExt::model()->findByPk($id);
		if(!$info) {
			$this->redirect('list');
		}
		$this->render('info',['info'=>$info]);
	}

	public function actionAlbum($id='')
	{
		$info = ProductExt::model()->findByPk($id);
		$this->render('album',['images'=>$info->images]);
	}
}