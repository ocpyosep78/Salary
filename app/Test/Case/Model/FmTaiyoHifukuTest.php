<?php
App::uses('FmTaiyoHifuku', 'Model');

/**
 * FmTaiyoHifuku Test Case
 *
 */
class FmTaiyoHifukuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_taiyo_hifuku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmTaiyoHifuku = ClassRegistry::init('FmTaiyoHifuku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmTaiyoHifuku);

		parent::tearDown();
	}

}
