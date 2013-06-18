<?php
App::uses('SpRiseCanDatum', 'Model');

/**
 * SpRiseCanDatum Test Case
 *
 */
class SpRiseCanDatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sp_rise_can_datum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SpRiseCanDatum = ClassRegistry::init('SpRiseCanDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SpRiseCanDatum);

		parent::tearDown();
	}

}
