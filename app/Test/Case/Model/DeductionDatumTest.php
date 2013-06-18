<?php
App::uses('DeductionDatum', 'Model');

/**
 * DeductionDatum Test Case
 *
 */
class DeductionDatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deduction_datum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeductionDatum = ClassRegistry::init('DeductionDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeductionDatum);

		parent::tearDown();
	}

}
