<?php
App::uses('QtJidoTeateGenkyo', 'Model');

/**
 * QtJidoTeateGenkyo Test Case
 *
 */
class QtJidoTeateGenkyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jido_teate_genkyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJidoTeateGenkyo = ClassRegistry::init('QtJidoTeateGenkyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJidoTeateGenkyo);

		parent::tearDown();
	}

}
