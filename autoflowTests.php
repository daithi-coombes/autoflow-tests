<?php
require_once '../application/modules/AutoFlow_API.class.php';

class AutoFlowTests extends WP_UnitTestCase{

	private $plugin;

	function setUp(){

		require_once '../../api-connection-manager/class-api-connection-manager.php';

		parent::setUp();
		$this->plugin = new AutoFlow_API();
		$this->plugin = null;
	}

	function testPluginInit(){
		$this->assertFalse( null == $this->plugin, 'AutoFlow_API class not constructed' );
	}
}
