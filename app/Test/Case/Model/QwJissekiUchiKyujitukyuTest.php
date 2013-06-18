<?php
App::uses('QwJissekiUchiKyujitukyu', 'Model');

/**
 * QwJissekiUchiKyujitukyu Test Case
 *
 */
class QwJissekiUchiKyujitukyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_kyujitukyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiKyujitukyu = ClassRegistry::init('QwJissekiUchiKyujitukyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiKyujitukyu);

		parent::tearDown();
	}

}
