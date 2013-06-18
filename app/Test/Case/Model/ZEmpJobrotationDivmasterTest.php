<?php
App::uses('ZEmpJobrotationDivmaster', 'Model');

/**
 * ZEmpJobrotationDivmaster Test Case
 *
 */
class ZEmpJobrotationDivmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_emp_jobrotation_divmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZEmpJobrotationDivmaster = ClassRegistry::init('ZEmpJobrotationDivmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZEmpJobrotationDivmaster);

		parent::tearDown();
	}

}
