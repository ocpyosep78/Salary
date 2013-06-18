<?php
App::uses('QmChokinKyujitsuYakinShikyuritsu', 'Model');

/**
 * QmChokinKyujitsuYakinShikyuritsu Test Case
 *
 */
class QmChokinKyujitsuYakinShikyuritsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_chokin_kyujitsu_yakin_shikyuritsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmChokinKyujitsuYakinShikyuritsu = ClassRegistry::init('QmChokinKyujitsuYakinShikyuritsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmChokinKyujitsuYakinShikyuritsu);

		parent::tearDown();
	}

}
