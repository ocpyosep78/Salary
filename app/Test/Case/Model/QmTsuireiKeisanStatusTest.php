<?php
App::uses('QmTsuireiKeisanStatus', 'Model');

/**
 * QmTsuireiKeisanStatus Test Case
 *
 */
class QmTsuireiKeisanStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tsuirei_keisan_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTsuireiKeisanStatus = ClassRegistry::init('QmTsuireiKeisanStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTsuireiKeisanStatus);

		parent::tearDown();
	}

}
