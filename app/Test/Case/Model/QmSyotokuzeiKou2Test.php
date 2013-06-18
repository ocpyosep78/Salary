<?php
App::uses('QmSyotokuzeiKou2', 'Model');

/**
 * QmSyotokuzeiKou2 Test Case
 *
 */
class QmSyotokuzeiKou2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syotokuzei_kou2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyotokuzeiKou2 = ClassRegistry::init('QmSyotokuzeiKou2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyotokuzeiKou2);

		parent::tearDown();
	}

}
