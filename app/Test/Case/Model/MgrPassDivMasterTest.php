<?php
App::uses('MgrPassDivMaster', 'Model');

/**
 * MgrPassDivMaster Test Case
 *
 */
class MgrPassDivMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mgr_pass_div_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MgrPassDivMaster = ClassRegistry::init('MgrPassDivMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MgrPassDivMaster);

		parent::tearDown();
	}

}
