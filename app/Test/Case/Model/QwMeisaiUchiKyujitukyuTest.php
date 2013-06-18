<?php
App::uses('QwMeisaiUchiKyujitukyu', 'Model');

/**
 * QwMeisaiUchiKyujitukyu Test Case
 *
 */
class QwMeisaiUchiKyujitukyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_kyujitukyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiKyujitukyu = ClassRegistry::init('QwMeisaiUchiKyujitukyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiKyujitukyu);

		parent::tearDown();
	}

}
