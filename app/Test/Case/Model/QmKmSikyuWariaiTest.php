<?php
App::uses('QmKmSikyuWariai', 'Model');

/**
 * QmKmSikyuWariai Test Case
 *
 */
class QmKmSikyuWariaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_sikyu_wariai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmSikyuWariai = ClassRegistry::init('QmKmSikyuWariai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmSikyuWariai);

		parent::tearDown();
	}

}
