<?php
App::uses('CatJobTypeDutyRecDivCbMaster', 'Model');

/**
 * CatJobTypeDutyRecDivCbMaster Test Case
 *
 */
class CatJobTypeDutyRecDivCbMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cat_job_type_duty_rec_div_cb_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CatJobTypeDutyRecDivCbMaster = ClassRegistry::init('CatJobTypeDutyRecDivCbMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CatJobTypeDutyRecDivCbMaster);

		parent::tearDown();
	}

}
