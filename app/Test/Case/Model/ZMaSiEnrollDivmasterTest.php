<?php
App::uses('ZMaSiEnrollDivmaster', 'Model');

/**
 * ZMaSiEnrollDivmaster Test Case
 *
 */
class ZMaSiEnrollDivmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_ma_si_enroll_divmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZMaSiEnrollDivmaster = ClassRegistry::init('ZMaSiEnrollDivmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZMaSiEnrollDivmaster);

		parent::tearDown();
	}

}
