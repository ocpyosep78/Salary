<?php
App::uses('MonthlySalaryTable', 'Model');

/**
 * MonthlySalaryTable Test Case
 *
 */
class MonthlySalaryTableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.monthly_salary_table'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MonthlySalaryTable = ClassRegistry::init('MonthlySalaryTable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MonthlySalaryTable);

		parent::tearDown();
	}

}
