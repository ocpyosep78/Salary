<?php
App::uses('QtJyuminzei', 'Model');

/**
 * QtJyuminzei Test Case
 *
 */
class QtJyuminzeiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jyuminzei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJyuminzei = ClassRegistry::init('QtJyuminzei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJyuminzei);

		parent::tearDown();
	}

}
