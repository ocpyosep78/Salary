<?php
App::uses('QmKmShoyoChoseiTaishogai', 'Model');

/**
 * QmKmShoyoChoseiTaishogai Test Case
 *
 */
class QmKmShoyoChoseiTaishogaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_shoyo_chosei_taishogai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmShoyoChoseiTaishogai = ClassRegistry::init('QmKmShoyoChoseiTaishogai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmShoyoChoseiTaishogai);

		parent::tearDown();
	}

}
