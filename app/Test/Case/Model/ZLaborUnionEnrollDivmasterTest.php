<?php
App::uses('ZLaborUnionEnrollDivmaster', 'Model');

/**
 * ZLaborUnionEnrollDivmaster Test Case
 *
 */
class ZLaborUnionEnrollDivmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_labor_union_enroll_divmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZLaborUnionEnrollDivmaster = ClassRegistry::init('ZLaborUnionEnrollDivmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZLaborUnionEnrollDivmaster);

		parent::tearDown();
	}

}
