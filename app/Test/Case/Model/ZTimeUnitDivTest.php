<?php
App::uses('ZTimeUnitDiv', 'Model');

/**
 * ZTimeUnitDiv Test Case
 *
 */
class ZTimeUnitDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_time_unit_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZTimeUnitDiv = ClassRegistry::init('ZTimeUnitDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZTimeUnitDiv);

		parent::tearDown();
	}

}
