<?php
App::uses('QmKyuyoKeisanTaishogai', 'Model');

/**
 * QmKyuyoKeisanTaishogai Test Case
 *
 */
class QmKyuyoKeisanTaishogaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuyo_keisan_taishogai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuyoKeisanTaishogai = ClassRegistry::init('QmKyuyoKeisanTaishogai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuyoKeisanTaishogai);

		parent::tearDown();
	}

}
