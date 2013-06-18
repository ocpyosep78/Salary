<?php
App::uses('MgrAdditionMaster', 'Model');

/**
 * MgrAdditionMaster Test Case
 *
 */
class MgrAdditionMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mgr_addition_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MgrAdditionMaster = ClassRegistry::init('MgrAdditionMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MgrAdditionMaster);

		parent::tearDown();
	}

}
