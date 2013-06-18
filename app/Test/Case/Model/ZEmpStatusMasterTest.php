<?php
App::uses('ZEmpStatusMaster', 'Model');

/**
 * ZEmpStatusMaster Test Case
 *
 */
class ZEmpStatusMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_emp_status_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZEmpStatusMaster = ClassRegistry::init('ZEmpStatusMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZEmpStatusMaster);

		parent::tearDown();
	}

}
