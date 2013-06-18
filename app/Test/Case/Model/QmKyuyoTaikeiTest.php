<?php
App::uses('QmKyuyoTaikei', 'Model');

/**
 * QmKyuyoTaikei Test Case
 *
 */
class QmKyuyoTaikeiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuyo_taikei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuyoTaikei = ClassRegistry::init('QmKyuyoTaikei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuyoTaikei);

		parent::tearDown();
	}

}
