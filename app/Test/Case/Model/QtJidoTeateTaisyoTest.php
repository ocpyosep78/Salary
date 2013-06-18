<?php
App::uses('QtJidoTeateTaisyo', 'Model');

/**
 * QtJidoTeateTaisyo Test Case
 *
 */
class QtJidoTeateTaisyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jido_teate_taisyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJidoTeateTaisyo = ClassRegistry::init('QtJidoTeateTaisyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJidoTeateTaisyo);

		parent::tearDown();
	}

}
