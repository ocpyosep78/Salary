<?php
App::uses('QmSyotokuzeiKou1', 'Model');

/**
 * QmSyotokuzeiKou1 Test Case
 *
 */
class QmSyotokuzeiKou1Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syotokuzei_kou1'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyotokuzeiKou1 = ClassRegistry::init('QmSyotokuzeiKou1');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyotokuzeiKou1);

		parent::tearDown();
	}

}
