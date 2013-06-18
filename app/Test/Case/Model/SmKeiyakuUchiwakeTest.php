<?php
App::uses('SmKeiyakuUchiwake', 'Model');

/**
 * SmKeiyakuUchiwake Test Case
 *
 */
class SmKeiyakuUchiwakeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_keiyaku_uchiwake'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKeiyakuUchiwake = ClassRegistry::init('SmKeiyakuUchiwake');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKeiyakuUchiwake);

		parent::tearDown();
	}

}
