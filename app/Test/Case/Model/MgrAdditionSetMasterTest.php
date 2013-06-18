<?php
App::uses('MgrAdditionSetMaster', 'Model');

/**
 * MgrAdditionSetMaster Test Case
 *
 */
class MgrAdditionSetMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mgr_addition_set_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MgrAdditionSetMaster = ClassRegistry::init('MgrAdditionSetMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MgrAdditionSetMaster);

		parent::tearDown();
	}

}
