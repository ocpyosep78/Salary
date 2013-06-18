<?php
App::uses('QtJyukyoNintei', 'Model');

/**
 * QtJyukyoNintei Test Case
 *
 */
class QtJyukyoNinteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jyukyo_nintei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJyukyoNintei = ClassRegistry::init('QtJyukyoNintei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJyukyoNintei);

		parent::tearDown();
	}

}
