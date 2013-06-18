<?php
App::uses('SmKensyuJohoHeader', 'Model');

/**
 * SmKensyuJohoHeader Test Case
 *
 */
class SmKensyuJohoHeaderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_joho_header'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuJohoHeader = ClassRegistry::init('SmKensyuJohoHeader');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuJohoHeader);

		parent::tearDown();
	}

}
