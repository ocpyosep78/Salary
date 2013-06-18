<?php
App::uses('SalaryClassPassDivMaster', 'Model');

/**
 * SalaryClassPassDivMaster Test Case
 *
 */
class SalaryClassPassDivMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salary_class_pass_div_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SalaryClassPassDivMaster = ClassRegistry::init('SalaryClassPassDivMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalaryClassPassDivMaster);

		parent::tearDown();
	}

}
