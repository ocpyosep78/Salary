<?php
App::uses('QmKmSeisekiritsuSanshutsuChild', 'Model');

/**
 * QmKmSeisekiritsuSanshutsuChild Test Case
 *
 */
class QmKmSeisekiritsuSanshutsuChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_seisekiritsu_sanshutsu_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmSeisekiritsuSanshutsuChild = ClassRegistry::init('QmKmSeisekiritsuSanshutsuChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmSeisekiritsuSanshutsuChild);

		parent::tearDown();
	}

}
