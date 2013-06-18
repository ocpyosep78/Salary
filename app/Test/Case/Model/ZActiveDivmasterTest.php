<?php
App::uses('ZActiveDivmaster', 'Model');

/**
 * ZActiveDivmaster Test Case
 *
 */
class ZActiveDivmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_active_divmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZActiveDivmaster = ClassRegistry::init('ZActiveDivmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZActiveDivmaster);

		parent::tearDown();
	}

}
