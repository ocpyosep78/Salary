<?php
App::uses('FeeAndUnionDueRateAppliedSalaryTypeMaster', 'Model');

/**
 * FeeAndUnionDueRateAppliedSalaryTypeMaster Test Case
 *
 */
class FeeAndUnionDueRateAppliedSalaryTypeMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fee_and_union_due_rate_applied_salary_type_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FeeAndUnionDueRateAppliedSalaryTypeMaster = ClassRegistry::init('FeeAndUnionDueRateAppliedSalaryTypeMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FeeAndUnionDueRateAppliedSalaryTypeMaster);

		parent::tearDown();
	}

}
