<?php
App::uses('QmKmSeisekiRitsu', 'Model');

/**
 * QmKmSeisekiRitsu Test Case
 *
 */
class QmKmSeisekiRitsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_seiseki_ritsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmSeisekiRitsu = ClassRegistry::init('QmKmSeisekiRitsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmSeisekiRitsu);

		parent::tearDown();
	}

}
