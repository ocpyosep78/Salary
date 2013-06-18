<?php
App::uses('QmKyuyoKeisanStatus', 'Model');

/**
 * QmKyuyoKeisanStatus Test Case
 *
 */
class QmKyuyoKeisanStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuyo_keisan_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuyoKeisanStatus = ClassRegistry::init('QmKyuyoKeisanStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuyoKeisanStatus);

		parent::tearDown();
	}

}
