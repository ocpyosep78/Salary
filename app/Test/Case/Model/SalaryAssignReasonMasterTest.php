<?php
App::uses('SalaryAssignReasonMaster', 'Model');

/**
 * SalaryAssignReasonMaster Test Case
 *
 */
class SalaryAssignReasonMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salary_assign_reason_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SalaryAssignReasonMaster = ClassRegistry::init('SalaryAssignReasonMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalaryAssignReasonMaster);

		parent::tearDown();
	}

}
