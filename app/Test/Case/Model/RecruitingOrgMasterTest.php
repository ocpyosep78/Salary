<?php
App::uses('RecruitingOrgMaster', 'Model');

/**
 * RecruitingOrgMaster Test Case
 *
 */
class RecruitingOrgMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruiting_org_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecruitingOrgMaster = ClassRegistry::init('RecruitingOrgMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitingOrgMaster);

		parent::tearDown();
	}

}
