<?php
App::uses('QmKmSeisekiHanteiParent', 'Model');

/**
 * QmKmSeisekiHanteiParent Test Case
 *
 */
class QmKmSeisekiHanteiParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_seiseki_hantei_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmSeisekiHanteiParent = ClassRegistry::init('QmKmSeisekiHanteiParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmSeisekiHanteiParent);

		parent::tearDown();
	}

}
