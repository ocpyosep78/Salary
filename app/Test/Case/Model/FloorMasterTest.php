<?php
App::uses('FloorMaster', 'Model');

/**
 * FloorMaster Test Case
 *
 */
class FloorMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.floor_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FloorMaster = ClassRegistry::init('FloorMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FloorMaster);

		parent::tearDown();
	}

}
