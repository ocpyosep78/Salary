<?php
App::uses('SchoolMaster', 'Model');

/**
 * SchoolMaster Test Case
 *
 */
class SchoolMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.school_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SchoolMaster = ClassRegistry::init('SchoolMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SchoolMaster);

		parent::tearDown();
	}

}
