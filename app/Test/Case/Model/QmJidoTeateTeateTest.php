<?php
App::uses('QmJidoTeateTeate', 'Model');

/**
 * QmJidoTeateTeate Test Case
 *
 */
class QmJidoTeateTeateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_jido_teate_teate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmJidoTeateTeate = ClassRegistry::init('QmJidoTeateTeate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmJidoTeateTeate);

		parent::tearDown();
	}

}
