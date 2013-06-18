<?php
App::uses('ZSpecialPayRiseReasonMaster', 'Model');

/**
 * ZSpecialPayRiseReasonMaster Test Case
 *
 */
class ZSpecialPayRiseReasonMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_special_pay_rise_reason_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZSpecialPayRiseReasonMaster = ClassRegistry::init('ZSpecialPayRiseReasonMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZSpecialPayRiseReasonMaster);

		parent::tearDown();
	}

}
