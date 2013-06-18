<?php
App::uses('SmKensyuseiJiho', 'Model');

/**
 * SmKensyuseiJiho Test Case
 *
 */
class SmKensyuseiJihoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyusei_jiho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuseiJiho = ClassRegistry::init('SmKensyuseiJiho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuseiJiho);

		parent::tearDown();
	}

}
