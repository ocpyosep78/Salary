<?php
App::uses('SmKensyuTaishoshaJoken', 'Model');

/**
 * SmKensyuTaishoshaJoken Test Case
 *
 */
class SmKensyuTaishoshaJokenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_taishosha_joken'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuTaishoshaJoken = ClassRegistry::init('SmKensyuTaishoshaJoken');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuTaishoshaJoken);

		parent::tearDown();
	}

}
