<?php
App::uses('JobDutySalaryCombiMaster', 'Model');

/**
 * JobDutySalaryCombiMaster Test Case
 *
 */
class JobDutySalaryCombiMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job_duty_salary_combi_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobDutySalaryCombiMaster = ClassRegistry::init('JobDutySalaryCombiMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobDutySalaryCombiMaster);

		parent::tearDown();
	}

}
