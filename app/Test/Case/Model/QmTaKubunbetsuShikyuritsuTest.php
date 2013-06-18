<?php
App::uses('QmTaKubunbetsuShikyuritsu', 'Model');

/**
 * QmTaKubunbetsuShikyuritsu Test Case
 *
 */
class QmTaKubunbetsuShikyuritsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_kubunbetsu_shikyuritsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaKubunbetsuShikyuritsu = ClassRegistry::init('QmTaKubunbetsuShikyuritsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaKubunbetsuShikyuritsu);

		parent::tearDown();
	}

}
