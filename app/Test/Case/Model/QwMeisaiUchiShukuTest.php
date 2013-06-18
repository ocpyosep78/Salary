<?php
App::uses('QwMeisaiUchiShuku', 'Model');

/**
 * QwMeisaiUchiShuku Test Case
 *
 */
class QwMeisaiUchiShukuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_shuku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiShuku = ClassRegistry::init('QwMeisaiUchiShuku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiShuku);

		parent::tearDown();
	}

}
