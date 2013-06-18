<?php
App::uses('HourlySalaryCalcCondIncMaster', 'Model');

/**
 * HourlySalaryCalcCondIncMaster Test Case
 *
 */
class HourlySalaryCalcCondIncMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hourly_salary_calc_cond_inc_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HourlySalaryCalcCondIncMaster = ClassRegistry::init('HourlySalaryCalcCondIncMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HourlySalaryCalcCondIncMaster);

		parent::tearDown();
	}

}
