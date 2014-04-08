<?php

class UserController extends Controller
{
	public function actionIndex()
	{/*
		$cs = Yii::app()->getClientScript();
		$base = Yii::app()->request->baseUrl;
		$cs->registerScriptFile($base."/js/jstorage/jquery.json-2.4.js");
		$cs->registerScriptFile($base."/js/jstorage/jstorage.js");*/
		//$cs->registerScriptFile($base."/js/jstorage/json2.js");
		$this->render('index');
	}
	
	public function actionCredentials()
	{
	
		$username = isset($_POST['username']) ? $_POST['username'] : 'unknown';

		$userDetails = Users::model()->findByAttributes(array('username'=>$username));
		$uniqueId = uniqid(Yii::app()->user->username);
	
		if( $username!=null)		
		{
			$userDetails = array('username'=>$username.Yii::app()->params['domainname'],'password'=>$userDetails->password,'uniqueid'=>$uniqueId);
		}
		else
		$userDetails = array('username'=>'unknown','password'=>'unknown');
		
		echo json_encode($userDetails); 
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
