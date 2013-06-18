<?php
App::uses('QtMasterKotei', 'Model');

/**
 * QtMasterKotei Test Case
 *
 */
class QtMasterKoteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_master_kotei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMasterKotei = ClassRegistry::init('QtMasterKotei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMasterKotei);

		parent::tearDown();
	}

}
