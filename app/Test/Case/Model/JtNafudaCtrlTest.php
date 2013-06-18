<?php
App::uses('JtNafudaCtrl', 'Model');

/**
 * JtNafudaCtrl Test Case
 *
 */
class JtNafudaCtrlTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_nafuda_ctrl'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtNafudaCtrl = ClassRegistry::init('JtNafudaCtrl');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtNafudaCtrl);

		parent::tearDown();
	}

}
