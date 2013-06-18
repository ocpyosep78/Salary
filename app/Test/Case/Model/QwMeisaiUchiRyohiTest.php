<?php
App::uses('QwMeisaiUchiRyohi', 'Model');

/**
 * QwMeisaiUchiRyohi Test Case
 *
 */
class QwMeisaiUchiRyohiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_ryohi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiRyohi = ClassRegistry::init('QwMeisaiUchiRyohi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiRyohi);

		parent::tearDown();
	}

}
