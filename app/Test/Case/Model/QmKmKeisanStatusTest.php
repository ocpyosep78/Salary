<?php
App::uses('QmKmKeisanStatus', 'Model');

/**
 * QmKmKeisanStatus Test Case
 *
 */
class QmKmKeisanStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_keisan_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmKeisanStatus = ClassRegistry::init('QmKmKeisanStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmKeisanStatus);

		parent::tearDown();
	}

}
