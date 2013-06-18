<?php
App::uses('JobChangeReasonMaster', 'Model');

/**
 * JobChangeReasonMaster Test Case
 *
 */
class JobChangeReasonMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job_change_reason_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobChangeReasonMaster = ClassRegistry::init('JobChangeReasonMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobChangeReasonMaster);

		parent::tearDown();
	}

}
