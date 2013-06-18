<?php
App::uses('MaxGradeRegMaster', 'Model');

/**
 * MaxGradeRegMaster Test Case
 *
 */
class MaxGradeRegMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.max_grade_reg_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MaxGradeRegMaster = ClassRegistry::init('MaxGradeRegMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MaxGradeRegMaster);

		parent::tearDown();
	}

}
