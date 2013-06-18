<?php
App::uses('RetirementAllowanceTable', 'Model');

/**
 * RetirementAllowanceTable Test Case
 *
 */
class RetirementAllowanceTableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.retirement_allowance_table'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RetirementAllowanceTable = ClassRegistry::init('RetirementAllowanceTable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RetirementAllowanceTable);

		parent::tearDown();
	}

}
