<?php
App::uses('CzShokusoSaibun', 'Model');

/**
 * CzShokusoSaibun Test Case
 *
 */
class CzShokusoSaibunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_shokuso_saibun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzShokusoSaibun = ClassRegistry::init('CzShokusoSaibun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzShokusoSaibun);

		parent::tearDown();
	}

}
