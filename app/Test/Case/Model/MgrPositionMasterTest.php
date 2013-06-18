<?php
App::uses('MgrPositionMaster', 'Model');

/**
 * MgrPositionMaster Test Case
 *
 */
class MgrPositionMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mgr_position_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MgrPositionMaster = ClassRegistry::init('MgrPositionMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MgrPositionMaster);

		parent::tearDown();
	}

}
