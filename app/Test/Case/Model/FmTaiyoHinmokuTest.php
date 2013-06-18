<?php
App::uses('FmTaiyoHinmoku', 'Model');

/**
 * FmTaiyoHinmoku Test Case
 *
 */
class FmTaiyoHinmokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_taiyo_hinmoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmTaiyoHinmoku = ClassRegistry::init('FmTaiyoHinmoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmTaiyoHinmoku);

		parent::tearDown();
	}

}
