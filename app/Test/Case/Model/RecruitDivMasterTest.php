<?php
App::uses('RecruitDivMaster', 'Model');

/**
 * RecruitDivMaster Test Case
 *
 */
class RecruitDivMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruit_div_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecruitDivMaster = ClassRegistry::init('RecruitDivMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitDivMaster);

		parent::tearDown();
	}

}
