<?php
App::uses('SmKensyuJohoMeisai', 'Model');

/**
 * SmKensyuJohoMeisai Test Case
 *
 */
class SmKensyuJohoMeisaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_joho_meisai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuJohoMeisai = ClassRegistry::init('SmKensyuJohoMeisai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuJohoMeisai);

		parent::tearDown();
	}

}
