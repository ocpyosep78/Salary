<?php
App::uses('QtJidoTeateJisseki', 'Model');

/**
 * QtJidoTeateJisseki Test Case
 *
 */
class QtJidoTeateJissekiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jido_teate_jisseki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJidoTeateJisseki = ClassRegistry::init('QtJidoTeateJisseki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJidoTeateJisseki);

		parent::tearDown();
	}

}
