<?php
App::uses('ZEraDivmaster', 'Model');

/**
 * ZEraDivmaster Test Case
 *
 */
class ZEraDivmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_era_divmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZEraDivmaster = ClassRegistry::init('ZEraDivmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZEraDivmaster);

		parent::tearDown();
	}

}
