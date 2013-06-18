<?php
App::uses('QmKmSyouyoZeiritsuHyo', 'Model');

/**
 * QmKmSyouyoZeiritsuHyo Test Case
 *
 */
class QmKmSyouyoZeiritsuHyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_syouyo_zeiritsu_hyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmSyouyoZeiritsuHyo = ClassRegistry::init('QmKmSyouyoZeiritsuHyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmSyouyoZeiritsuHyo);

		parent::tearDown();
	}

}
