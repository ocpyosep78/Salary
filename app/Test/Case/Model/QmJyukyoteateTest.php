<?php
App::uses('QmJyukyoteate', 'Model');

/**
 * QmJyukyoteate Test Case
 *
 */
class QmJyukyoteateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_jyukyoteate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmJyukyoteate = ClassRegistry::init('QmJyukyoteate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmJyukyoteate);

		parent::tearDown();
	}

}
