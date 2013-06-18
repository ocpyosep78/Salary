<?php
App::uses('QwTsuireiSagakuUchiKyujitukyu', 'Model');

/**
 * QwTsuireiSagakuUchiKyujitukyu Test Case
 *
 */
class QwTsuireiSagakuUchiKyujitukyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_kyujitukyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiKyujitukyu = ClassRegistry::init('QwTsuireiSagakuUchiKyujitukyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiKyujitukyu);

		parent::tearDown();
	}

}
