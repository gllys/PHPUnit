<?php
/**
 * ���Ի���
*/

define('APPLICATION_PATH', 'D:\WAMP\wamp\wamp\www\openapi_ticket');
require ('D:\WAMP\wamp\wamp\www\setting/openapi_ticket.php');

class TestCase extends PHPUnit_Framework_TestCase {
	/**
	 * yaf����ʵ��
	 *
	 * @var YafApplication
	 */
	protected $_application = null;
	/**
	 * ���췽������ʼ��yaf����ʵ��
	 */



	public function __construct() {
		parent::__construct();
		$this->_application = $this->getApplication();
	}
	/**
	 * ����application
	 */
	public function setApplication() {


		$application = new Yaf_Application(APPLICATION_PATH ."/conf/base.ini");
		$application->bootstrap();
		Yaf_Registry::set('application', $application);
	}
	/**
	 * ��ȡapplication
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