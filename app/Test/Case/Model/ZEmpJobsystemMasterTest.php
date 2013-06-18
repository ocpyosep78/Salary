<?php
App::uses('ZEmpJobsystemMaster', 'Model');

/**
 * ZEmpJobsystemMaster Test Case
 *
 */
class ZEmpJobsystemMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_emp_jobsystem_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZEmpJobsystemMaster = ClassRegistry::init('ZEmpJobsystemMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZEmpJobsystemMaster);

		parent::tearDown();
	}

}
