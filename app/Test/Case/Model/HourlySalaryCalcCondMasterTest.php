<?php
App::uses('HourlySalaryCalcCondMaster', 'Model');

/**
 * HourlySalaryCalcCondMaster Test Case
 *
 */
class HourlySalaryCalcCondMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hourly_salary_calc_cond_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HourlySalaryCalcCondMaster = ClassRegistry::init('HourlySalaryCalcCondMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HourlySalaryCalcCondMaster);

		parent::tearDown();
	}

}
