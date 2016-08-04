<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class MycookieController extends Controller{
	public function actionIndex(){
		// $cookies = \YII::$app->response->cookies;

		// $cookie_data = array('name'=>'user','value'=>'zhangsan1');

		// $cookies->add(new Cookie($cookie_data));

		$cookies = \YII::$app->request->cookies;
		echo $cookies->getValue('user',20);

		//$cookies->remove('user');
	}
}