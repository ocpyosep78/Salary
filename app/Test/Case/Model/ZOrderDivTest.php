<?php
App::uses('ZOrderDiv', 'Model');

/**
 * ZOrderDiv Test Case
 *
 */
class ZOrderDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_order_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZOrderDiv = ClassRegistry::init('ZOrderDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZOrderDiv);

		parent::tearDown();
	}

}
