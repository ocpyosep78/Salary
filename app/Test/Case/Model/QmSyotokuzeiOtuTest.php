<?php
App::uses('QmSyotokuzeiOtu', 'Model');

/**
 * QmSyotokuzeiOtu Test Case
 *
 */
class QmSyotokuzeiOtuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syotokuzei_otu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyotokuzeiOtu = ClassRegistry::init('QmSyotokuzeiOtu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyotokuzeiOtu);

		parent::tearDown();
	}

}
