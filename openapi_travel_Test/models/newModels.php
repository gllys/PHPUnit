<?php
require 'D:\WAMP\wamp\wamp\www\PHPUnit\openapi_ticket_Test\base\newYaf.php';
Class newModels extends TestCase{

	public function setUp(){

		//����ģ��
		$model =  new ApiOrderModel();
		$res = $model->detail($params=array());
		var_dump($res);
	}
}