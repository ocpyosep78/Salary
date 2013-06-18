<?php
App::uses('QmKmSeisekiHanteiChild', 'Model');

/**
 * QmKmSeisekiHanteiChild Test Case
 *
 */
class QmKmSeisekiHanteiChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_seiseki_hantei_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmSeisekiHanteiChild = ClassRegistry::init('QmKmSeisekiHanteiChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmSeisekiHanteiChild);

		parent::tearDown();
	}

}
