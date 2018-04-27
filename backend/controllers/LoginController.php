<?php
namespace backend\controllers;
use Yii;
use yii\web\SmartWebController;
use yii\base\Exception;
use yii\base\SmartException;
class LoginController extends SmartWebController{
	public $enableCsrfValidation=false;
	//========================================
    public function actionIndex(){
		$this->layout=false;
		return $this->render('index');
    }
    //========================================
}