<?php
App::uses('QtJidoTeateNintei', 'Model');

/**
 * QtJidoTeateNintei Test Case
 *
 */
class QtJidoTeateNinteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jido_teate_nintei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJidoTeateNintei = ClassRegistry::init('QtJidoTeateNintei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJidoTeateNintei);

		parent::tearDown();
	}

}
