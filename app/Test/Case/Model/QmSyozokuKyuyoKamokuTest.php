<?php
App::uses('QmSyozokuKyuyoKamoku', 'Model');

/**
 * QmSyozokuKyuyoKamoku Test Case
 *
 */
class QmSyozokuKyuyoKamokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syozoku_kyuyo_kamoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyozokuKyuyoKamoku = ClassRegistry::init('QmSyozokuKyuyoKamoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyozokuKyuyoKamoku);

		parent::tearDown();
	}

}
