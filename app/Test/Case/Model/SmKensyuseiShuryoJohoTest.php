<?php
App::uses('SmKensyuseiShuryoJoho', 'Model');

/**
 * SmKensyuseiShuryoJoho Test Case
 *
 */
class SmKensyuseiShuryoJohoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyusei_shuryo_joho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuseiShuryoJoho = ClassRegistry::init('SmKensyuseiShuryoJoho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuseiShuryoJoho);

		parent::tearDown();
	}

}
