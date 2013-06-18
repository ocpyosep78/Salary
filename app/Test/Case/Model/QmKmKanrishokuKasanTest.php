<?php
App::uses('QmKmKanrishokuKasan', 'Model');

/**
 * QmKmKanrishokuKasan Test Case
 *
 */
class QmKmKanrishokuKasanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_kanrishoku_kasan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmKanrishokuKasan = ClassRegistry::init('QmKmKanrishokuKasan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmKanrishokuKasan);

		parent::tearDown();
	}

}
