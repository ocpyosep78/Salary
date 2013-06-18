<?php
App::uses('QmKyuryoHoshoKaiteiShubetsu', 'Model');

/**
 * QmKyuryoHoshoKaiteiShubetsu Test Case
 *
 */
class QmKyuryoHoshoKaiteiShubetsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuryo_hosho_kaitei_shubetsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuryoHoshoKaiteiShubetsu = ClassRegistry::init('QmKyuryoHoshoKaiteiShubetsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuryoHoshoKaiteiShubetsu);

		parent::tearDown();
	}

}
