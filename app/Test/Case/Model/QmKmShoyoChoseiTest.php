<?php
App::uses('QmKmShoyoChosei', 'Model');

/**
 * QmKmShoyoChosei Test Case
 *
 */
class QmKmShoyoChoseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_shoyo_chosei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmShoyoChosei = ClassRegistry::init('QmKmShoyoChosei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmShoyoChosei);

		parent::tearDown();
	}

}
