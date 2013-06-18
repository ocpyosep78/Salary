<?php
App::uses('SmKensyuCode', 'Model');

/**
 * SmKensyuCode Test Case
 *
 */
class SmKensyuCodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_code'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuCode = ClassRegistry::init('SmKensyuCode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuCode);

		parent::tearDown();
	}

}
