<?php
App::uses('HourlySalaryCalcCondBaseMaster', 'Model');

/**
 * HourlySalaryCalcCondBaseMaster Test Case
 *
 */
class HourlySalaryCalcCondBaseMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hourly_salary_calc_cond_base_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HourlySalaryCalcCondBaseMaster = ClassRegistry::init('HourlySalaryCalcCondBaseMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HourlySalaryCalcCondBaseMaster);

		parent::tearDown();
	}

}
