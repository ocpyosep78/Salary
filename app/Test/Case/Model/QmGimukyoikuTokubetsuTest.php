<?php
App::uses('QmGimukyoikuTokubetsu', 'Model');

/**
 * QmGimukyoikuTokubetsu Test Case
 *
 */
class QmGimukyoikuTokubetsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_gimukyoiku_tokubetsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmGimukyoikuTokubetsu = ClassRegistry::init('QmGimukyoikuTokubetsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmGimukyoikuTokubetsu);

		parent::tearDown();
	}

}
