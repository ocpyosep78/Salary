<?php
App::uses('SmKeiyakuShiyosho', 'Model');

/**
 * SmKeiyakuShiyosho Test Case
 *
 */
class SmKeiyakuShiyoshoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_keiyaku_shiyosho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKeiyakuShiyosho = ClassRegistry::init('SmKeiyakuShiyosho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKeiyakuShiyosho);

		parent::tearDown();
	}

}
