<?php
App::uses('SalaryGuaranteeDetail', 'Model');

/**
 * SalaryGuaranteeDetail Test Case
 *
 */
class SalaryGuaranteeDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salary_guarantee_detail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SalaryGuaranteeDetail = ClassRegistry::init('SalaryGuaranteeDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalaryGuaranteeDetail);

		parent::tearDown();
	}

}
