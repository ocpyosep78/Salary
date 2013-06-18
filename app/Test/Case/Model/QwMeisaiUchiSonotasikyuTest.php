<?php
App::uses('QwMeisaiUchiSonotasikyu', 'Model');

/**
 * QwMeisaiUchiSonotasikyu Test Case
 *
 */
class QwMeisaiUchiSonotasikyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_sonotasikyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiSonotasikyu = ClassRegistry::init('QwMeisaiUchiSonotasikyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiSonotasikyu);

		parent::tearDown();
	}

}
