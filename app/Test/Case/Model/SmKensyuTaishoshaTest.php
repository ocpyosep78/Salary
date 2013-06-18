<?php
App::uses('SmKensyuTaishosha', 'Model');

/**
 * SmKensyuTaishosha Test Case
 *
 */
class SmKensyuTaishoshaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_taishosha'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuTaishosha = ClassRegistry::init('SmKensyuTaishosha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuTaishosha);

		parent::tearDown();
	}

}
