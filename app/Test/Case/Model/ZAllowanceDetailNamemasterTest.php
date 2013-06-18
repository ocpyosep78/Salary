<?php
App::uses('ZAllowanceDetailNamemaster', 'Model');

/**
 * ZAllowanceDetailNamemaster Test Case
 *
 */
class ZAllowanceDetailNamemasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_allowance_detail_namemaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZAllowanceDetailNamemaster = ClassRegistry::init('ZAllowanceDetailNamemaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZAllowanceDetailNamemaster);

		parent::tearDown();
	}

}
