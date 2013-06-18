<?php
App::uses('DependentRelativesTaxdeduction', 'Model');

/**
 * DependentRelativesTaxdeduction Test Case
 *
 */
class DependentRelativesTaxdeductionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dependent_relatives_taxdeduction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DependentRelativesTaxdeduction = ClassRegistry::init('DependentRelativesTaxdeduction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DependentRelativesTaxdeduction);

		parent::tearDown();
	}

}
