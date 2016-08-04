<?php
namespace app\controllers;
use yii\web\Controller;

class HelloController extends Controller{
	public function actionIndex(){
		//request请求组件
		//$request = \YII::$app->request;

		// echo $request->get('id',20);
		// $request->post('name',333);

		// if($request->isGet){
		// 	echo 'this is get method!';
		// }
		// if($request->isPost){
		// 	echo 'this is get method!';
		// }
		//获取id
		//echo $request->userIp;
		//echo 'hello world';
		//控制器相应处理
		//$res = \YII::$app->response;

		//$res->statusCode = '404';

		// $res->headers->add('pragma','no-cache');
		//$res->headers->set('prama','max-age=5');

		//$res->headers->remove('pragma');

		//跳转
		// $res->headers->add('location','http://www.baidu.com');

		//$this->redirect('http://www.baidu.com',302);

		//文件下载
		// $res->headers->add('content-disposition','attachment;filename="a.jpg"');


		//$res->sendFile('./robots.txt');



















	}
}