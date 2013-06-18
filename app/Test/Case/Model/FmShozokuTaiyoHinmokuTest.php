<?php
App::uses('FmShozokuTaiyoHinmoku', 'Model');

/**
 * FmShozokuTaiyoHinmoku Test Case
 *
 */
class FmShozokuTaiyoHinmokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_shozoku_taiyo_hinmoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmShozokuTaiyoHinmoku = ClassRegistry::init('FmShozokuTaiyoHinmoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmShozokuTaiyoHinmoku);

		parent::tearDown();
	}

}
