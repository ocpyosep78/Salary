<?php
App::uses('QmKyuyoShiharaisha', 'Model');

/**
 * QmKyuyoShiharaisha Test Case
 *
 */
class QmKyuyoShiharaishaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuyo_shiharaisha'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuyoShiharaisha = ClassRegistry::init('QmKyuyoShiharaisha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuyoShiharaisha);

		parent::tearDown();
	}

}
