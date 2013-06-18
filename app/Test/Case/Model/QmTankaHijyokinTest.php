<?php
App::uses('QmTankaHijyokin', 'Model');

/**
 * QmTankaHijyokin Test Case
 *
 */
class QmTankaHijyokinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tanka_hijyokin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTankaHijyokin = ClassRegistry::init('QmTankaHijyokin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTankaHijyokin);

		parent::tearDown();
	}

}
