<?php
App::uses('QwKmShoyoChoseiKeisanKekka', 'Model');

/**
 * QwKmShoyoChoseiKeisanKekka Test Case
 *
 */
class QwKmShoyoChoseiKeisanKekkaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_km_shoyo_chosei_keisan_kekka'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwKmShoyoChoseiKeisanKekka = ClassRegistry::init('QwKmShoyoChoseiKeisanKekka');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwKmShoyoChoseiKeisanKekka);

		parent::tearDown();
	}

}
