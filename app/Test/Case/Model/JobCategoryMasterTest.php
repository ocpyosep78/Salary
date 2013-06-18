<?php
App::uses('JobCategoryMaster', 'Model');

/**
 * JobCategoryMaster Test Case
 *
 */
class JobCategoryMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job_category_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobCategoryMaster = ClassRegistry::init('JobCategoryMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobCategoryMaster);

		parent::tearDown();
	}

}
