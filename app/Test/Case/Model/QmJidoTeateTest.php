<?php
App::uses('QmJidoTeate', 'Model');

/**
 * QmJidoTeate Test Case
 *
 */
class QmJidoTeateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_jido_teate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmJidoTeate = ClassRegistry::init('QmJidoTeate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmJidoTeate);

		parent::tearDown();
	}

}
