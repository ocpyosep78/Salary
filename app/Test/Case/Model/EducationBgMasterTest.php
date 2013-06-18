<?php
App::uses('EducationBgMaster', 'Model');

/**
 * EducationBgMaster Test Case
 *
 */
class EducationBgMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.education_bg_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EducationBgMaster = ClassRegistry::init('EducationBgMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EducationBgMaster);

		parent::tearDown();
	}

}
