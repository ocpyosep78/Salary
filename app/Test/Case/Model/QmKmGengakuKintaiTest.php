<?php
App::uses('QmKmGengakuKintai', 'Model');

/**
 * QmKmGengakuKintai Test Case
 *
 */
class QmKmGengakuKintaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_gengaku_kintai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmGengakuKintai = ClassRegistry::init('QmKmGengakuKintai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmGengakuKintai);

		parent::tearDown();
	}

}
