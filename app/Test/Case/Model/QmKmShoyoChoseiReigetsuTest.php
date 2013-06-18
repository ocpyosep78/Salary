<?php
App::uses('QmKmShoyoChoseiReigetsu', 'Model');

/**
 * QmKmShoyoChoseiReigetsu Test Case
 *
 */
class QmKmShoyoChoseiReigetsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_shoyo_chosei_reigetsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmShoyoChoseiReigetsu = ClassRegistry::init('QmKmShoyoChoseiReigetsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmShoyoChoseiReigetsu);

		parent::tearDown();
	}

}
