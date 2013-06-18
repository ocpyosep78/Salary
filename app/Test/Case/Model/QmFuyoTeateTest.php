<?php
App::uses('QmFuyoTeate', 'Model');

/**
 * QmFuyoTeate Test Case
 *
 */
class QmFuyoTeateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_fuyo_teate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmFuyoTeate = ClassRegistry::init('QmFuyoTeate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmFuyoTeate);

		parent::tearDown();
	}

}
