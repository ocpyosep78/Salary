<?php
App::uses('RecruitJobTypeMaster', 'Model');

/**
 * RecruitJobTypeMaster Test Case
 *
 */
class RecruitJobTypeMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruit_job_type_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecruitJobTypeMaster = ClassRegistry::init('RecruitJobTypeMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitJobTypeMaster);

		parent::tearDown();
	}

}
