<?php
App::uses('ZEmpClassMaster', 'Model');

/**
 * ZEmpClassMaster Test Case
 *
 */
class ZEmpClassMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_emp_class_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZEmpClassMaster = ClassRegistry::init('ZEmpClassMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZEmpClassMaster);

		parent::tearDown();
	}

}
