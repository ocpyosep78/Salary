<?php
App::uses('SmKensyuKaijou', 'Model');

/**
 * SmKensyuKaijou Test Case
 *
 */
class SmKensyuKaijouTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_kaijou'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuKaijou = ClassRegistry::init('SmKensyuKaijou');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuKaijou);

		parent::tearDown();
	}

}
