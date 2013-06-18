<?php
App::uses('FmBetsunouDaicho', 'Model');

/**
 * FmBetsunouDaicho Test Case
 *
 */
class FmBetsunouDaichoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_betsunou_daicho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmBetsunouDaicho = ClassRegistry::init('FmBetsunouDaicho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmBetsunouDaicho);

		parent::tearDown();
	}

}
