<?php
define('APPLICATION_PATH','D:\WAMP\wamp\wamp\www\openapi_ticket');
require 'D:\WAMP\wamp\wamp\www\setting/openapi_ticket.php';

class TestCase extends PHPUnit_Framework_TestCase {
	
	protected $_application = null;
	
	public function __construct() {
		parent::__construct();
		$this->_application = $this->getApplication();
	}

	public function setApplication() {


		$application = new Yaf_Application(APPLICATION_PATH ."/conf/base.ini");
		$application->bootstrap();
		Yaf_Registry::set('application', $application);
	}

	public function getApplication() {
				$application = Yaf_Registry::get('application');
			if (!$application) {
		$this->setApplication();
		 		}
		return Yaf_Registry::get('application');
	}
}