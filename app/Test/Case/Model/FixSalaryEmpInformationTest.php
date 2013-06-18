<?php
App::uses('FixSalaryEmpInformation', 'Model');

/**
 * FixSalaryEmpInformation Test Case
 *
 */
class FixSalaryEmpInformationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fix_salary_emp_information'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FixSalaryEmpInformation = ClassRegistry::init('FixSalaryEmpInformation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FixSalaryEmpInformation);

		parent::tearDown();
	}

}
