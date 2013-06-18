<?php
App::uses('SmKensyuShubetu', 'Model');

/**
 * SmKensyuShubetu Test Case
 *
 */
class SmKensyuShubetuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_shubetu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuShubetu = ClassRegistry::init('SmKensyuShubetu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuShubetu);

		parent::tearDown();
	}

}
