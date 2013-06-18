<?php
App::uses('SmKensyuKizaiBuppin', 'Model');

/**
 * SmKensyuKizaiBuppin Test Case
 *
 */
class SmKensyuKizaiBuppinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_kizai_buppin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuKizaiBuppin = ClassRegistry::init('SmKensyuKizaiBuppin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuKizaiBuppin);

		parent::tearDown();
	}

}
