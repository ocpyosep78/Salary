<?php
App::uses('EndDiliAbsentDaysPaymentRatioMaster', 'Model');

/**
 * EndDiliAbsentDaysPaymentRatioMaster Test Case
 *
 */
class EndDiliAbsentDaysPaymentRatioMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.end_dili_absent_days_payment_ratio_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EndDiliAbsentDaysPaymentRatioMaster = ClassRegistry::init('EndDiliAbsentDaysPaymentRatioMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EndDiliAbsentDaysPaymentRatioMaster);

		parent::tearDown();
	}

}
