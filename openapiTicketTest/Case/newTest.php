<?php

require_once 'D:\WAMP\wamp\wamp\www\PHPUnit\openapiTicketTest\base\newYaf.php';
Class newTest extends TestCase{

    protected function setUp(){


	}

	public function testNew() {
		$request = new Yaf_Request_Simple("CLI", "Taobao", "V1", 'rest',array('info'=>1));
		$response = $this->_application->getDispatcher()
		->returnResponse(true)
		->dispatch($request);
 		$this->assertFalse($response);
	}
	protected function tearDown()
	{
		
	}
}
