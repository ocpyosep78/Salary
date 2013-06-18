<?php
App::uses('DependentRelativesAllowance', 'Model');

/**
 * DependentRelativesAllowance Test Case
 *
 */
class DependentRelativesAllowanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dependent_relatives_allowance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DependentRelativesAllowance = ClassRegistry::init('DependentRelativesAllowance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DependentRelativesAllowance);

		parent::tearDown();
	}

}
