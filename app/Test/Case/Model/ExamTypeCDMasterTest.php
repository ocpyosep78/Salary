<?php
App::uses('ExamTypeCDMaster', 'Model');

/**
 * ExamTypeCDMaster Test Case
 *
 */
class ExamTypeCDMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exam_type_c_d_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExamTypeCDMaster = ClassRegistry::init('ExamTypeCDMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExamTypeCDMaster);

		parent::tearDown();
	}

}
