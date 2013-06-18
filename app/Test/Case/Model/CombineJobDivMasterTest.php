<?php
App::uses('CombineJobDivMaster', 'Model');

/**
 * CombineJobDivMaster Test Case
 *
 */
class CombineJobDivMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.combine_job_div_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CombineJobDivMaster = ClassRegistry::init('CombineJobDivMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CombineJobDivMaster);

		parent::tearDown();
	}

}
