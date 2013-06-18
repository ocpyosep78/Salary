<?php
App::uses('QtJidoTeateSiharai', 'Model');

/**
 * QtJidoTeateSiharai Test Case
 *
 */
class QtJidoTeateSiharaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jido_teate_siharai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJidoTeateSiharai = ClassRegistry::init('QtJidoTeateSiharai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJidoTeateSiharai);

		parent::tearDown();
	}

}
