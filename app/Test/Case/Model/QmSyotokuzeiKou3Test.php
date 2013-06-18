<?php
App::uses('QmSyotokuzeiKou3', 'Model');

/**
 * QmSyotokuzeiKou3 Test Case
 *
 */
class QmSyotokuzeiKou3Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syotokuzei_kou3'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyotokuzeiKou3 = ClassRegistry::init('QmSyotokuzeiKou3');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyotokuzeiKou3);

		parent::tearDown();
	}

}
