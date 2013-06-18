<?php
App::uses('QmSyozokuRyohiKamokuTaiou', 'Model');

/**
 * QmSyozokuRyohiKamokuTaiou Test Case
 *
 */
class QmSyozokuRyohiKamokuTaiouTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syozoku_ryohi_kamoku_taiou'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyozokuRyohiKamokuTaiou = ClassRegistry::init('QmSyozokuRyohiKamokuTaiou');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyozokuRyohiKamokuTaiou);

		parent::tearDown();
	}

}
