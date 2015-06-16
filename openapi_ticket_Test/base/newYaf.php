<?php
/**
 * 测试基类
*/

define('APPLICATION_PATH', 'D:\WAMP\wamp\wamp\www\openapi_ticket');
require ('D:\WAMP\wamp\wamp\www\setting/openapi_ticket.php');

class TestCase extends PHPUnit_Framework_TestCase {
	/**
	 * yaf运行实例
	 *
	 * @var YafApplication
	 */
	protected $_application = null;
	/**
	 * 构造方法，初始化yaf运行实例
	 */



	public function __construct() {
		parent::__construct();
		$this->_application = $this->getApplication();
	}
	/**
	 * 设置application
	 */
	public function setApplication() {


		$application = new Yaf_Application(APPLICATION_PATH ."/conf/base.ini");
		$application->bootstrap();
		Yaf_Registry::set('application', $application);
	}
	/**
	 * 获取application
	 * @return YafApplication
	 */
	public function getApplication() {
		// 		$application = Yaf_Registry::get('application');
		// 		if (!$application) {
		$this->setApplication();
		// 		}
		return Yaf_Registry::get('application');
	}
}