<?php
App::uses('SmKensyuMeisho', 'Model');

/**
 * SmKensyuMeisho Test Case
 *
 */
class SmKensyuMeishoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_meisho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuMeisho = ClassRegistry::init('SmKensyuMeisho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuMeisho);

		parent::tearDown();
	}

}
