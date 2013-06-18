<?php
App::uses('SalaryGuaranteeMaster', 'Model');

/**
 * SalaryGuaranteeMaster Test Case
 *
 */
class SalaryGuaranteeMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salary_guarantee_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SalaryGuaranteeMaster = ClassRegistry::init('SalaryGuaranteeMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalaryGuaranteeMaster);

		parent::tearDown();
	}

}
