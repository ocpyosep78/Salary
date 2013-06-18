<?php
App::uses('GradeAdjustMaster', 'Model');

/**
 * GradeAdjustMaster Test Case
 *
 */
class GradeAdjustMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grade_adjust_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GradeAdjustMaster = ClassRegistry::init('GradeAdjustMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GradeAdjustMaster);

		parent::tearDown();
	}

}
