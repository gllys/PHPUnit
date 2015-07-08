<?php

require 'D:\WAMP\wamp\wamp\www\PHPUnit\openapi_ticket_Test\base\newYaf.php';
Class newTest extends TestCase{

	public function setUp(){


	}

	public function testNew() {

		$request = new Yaf_Request_Simple("CLI", "V1", "Test", 'index2');
		$response = $this->_application->getDispatcher()
		->returnResponse(true)
		->dispatch($request);




	}
}
