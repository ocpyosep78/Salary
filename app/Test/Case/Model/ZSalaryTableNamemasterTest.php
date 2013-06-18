<?php
App::uses('ZSalaryTableNamemaster', 'Model');

/**
 * ZSalaryTableNamemaster Test Case
 *
 */
class ZSalaryTableNamemasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_salary_table_namemaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZSalaryTableNamemaster = ClassRegistry::init('ZSalaryTableNamemaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZSalaryTableNamemaster);

		parent::tearDown();
	}

}
