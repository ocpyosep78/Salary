<?php
App::uses('QmKyosaiKakeFutanKin', 'Model');

/**
 * QmKyosaiKakeFutanKin Test Case
 *
 */
class QmKyosaiKakeFutanKinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyosai_kake_futan_kin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyosaiKakeFutanKin = ClassRegistry::init('QmKyosaiKakeFutanKin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyosaiKakeFutanKin);

		parent::tearDown();
	}

}
