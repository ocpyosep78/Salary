<?php
App::uses('QwMeisaiUchiShoyochosei', 'Model');

/**
 * QwMeisaiUchiShoyochosei Test Case
 *
 */
class QwMeisaiUchiShoyochoseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_shoyochosei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiShoyochosei = ClassRegistry::init('QwMeisaiUchiShoyochosei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiShoyochosei);

		parent::tearDown();
	}

}
