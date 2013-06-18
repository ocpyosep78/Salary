<?php
App::uses('SmKensyuTaikei', 'Model');

/**
 * SmKensyuTaikei Test Case
 *
 */
class SmKensyuTaikeiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_taikei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuTaikei = ClassRegistry::init('SmKensyuTaikei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuTaikei);

		parent::tearDown();
	}

}
