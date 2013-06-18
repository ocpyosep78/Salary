<?php
App::uses('GradeRestrictMaster', 'Model');

/**
 * GradeRestrictMaster Test Case
 *
 */
class GradeRestrictMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grade_restrict_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GradeRestrictMaster = ClassRegistry::init('GradeRestrictMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GradeRestrictMaster);

		parent::tearDown();
	}

}
