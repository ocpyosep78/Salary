<?php
App::uses('ZSalaryguaranteeDivmaster', 'Model');

/**
 * ZSalaryguaranteeDivmaster Test Case
 *
 */
class ZSalaryguaranteeDivmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_salaryguarantee_divmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZSalaryguaranteeDivmaster = ClassRegistry::init('ZSalaryguaranteeDivmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZSalaryguaranteeDivmaster);

		parent::tearDown();
	}

}
