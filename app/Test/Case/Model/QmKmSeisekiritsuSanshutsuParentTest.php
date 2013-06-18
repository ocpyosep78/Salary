<?php
App::uses('QmKmSeisekiritsuSanshutsuParent', 'Model');

/**
 * QmKmSeisekiritsuSanshutsuParent Test Case
 *
 */
class QmKmSeisekiritsuSanshutsuParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_seisekiritsu_sanshutsu_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmSeisekiritsuSanshutsuParent = ClassRegistry::init('QmKmSeisekiritsuSanshutsuParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmSeisekiritsuSanshutsuParent);

		parent::tearDown();
	}

}
