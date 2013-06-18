<?php
App::uses('QmKmKekkinnissuKansan', 'Model');

/**
 * QmKmKekkinnissuKansan Test Case
 *
 */
class QmKmKekkinnissuKansanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_kekkinnissu_kansan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmKekkinnissuKansan = ClassRegistry::init('QmKmKekkinnissuKansan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmKekkinnissuKansan);

		parent::tearDown();
	}

}
