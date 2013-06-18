<?php
App::uses('ZOrderTypeDivmaster', 'Model');

/**
 * ZOrderTypeDivmaster Test Case
 *
 */
class ZOrderTypeDivmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_order_type_divmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZOrderTypeDivmaster = ClassRegistry::init('ZOrderTypeDivmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZOrderTypeDivmaster);

		parent::tearDown();
	}

}
