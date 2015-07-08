<?php
require 'D:\WAMP\wamp\wamp\www\PHPUnit\openapi_ticket_Test\base\newYaf.php';
Class newModels extends TestCase{

// 	public function setUp(){

// 		//测试模型
		
// 	}

	public function testFirst(){
		$model =  new ApiOrderModel();
		$res = $model->create($params=array('sign'=>'debug'));
		
		$this->assertTrue($res,'Finish');
	}
	
}