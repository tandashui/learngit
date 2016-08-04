<?php
namespace app\controllers;
use yii\web\Controller;

class MysessionController extends Controller{
	public function actionIndex(){
		//session组件
		$session = \YII::$app->session;
		//开启session
		$session->open();
		if($session->isActive){
			echo 'session is active';
		}

		//$session->set('user','张三');

		//echo $session->get('user');
		//$session->remove('user');

		// $session['user'] = '张三';
		// echo $session['user'];
		// unset($session['user']);
	}
}