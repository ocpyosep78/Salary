<?php
App::uses('QtJidoTeateKihon', 'Model');

/**
 * QtJidoTeateKihon Test Case
 *
 */
class QtJidoTeateKihonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jido_teate_kihon'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJidoTeateKihon = ClassRegistry::init('QtJidoTeateKihon');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJidoTeateKihon);

		parent::tearDown();
	}

}
