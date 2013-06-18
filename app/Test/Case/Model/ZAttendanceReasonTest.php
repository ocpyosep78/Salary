<?php
App::uses('ZAttendanceReason', 'Model');

/**
 * ZAttendanceReason Test Case
 *
 */
class ZAttendanceReasonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_attendance_reason'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZAttendanceReason = ClassRegistry::init('ZAttendanceReason');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZAttendanceReason);

		parent::tearDown();
	}

}
