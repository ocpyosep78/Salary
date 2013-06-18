<?php
App::uses('QtJissekiUchiKyujitukyu', 'Model');

/**
 * QtJissekiUchiKyujitukyu Test Case
 *
 */
class QtJissekiUchiKyujitukyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_kyujitukyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiKyujitukyu = ClassRegistry::init('QtJissekiUchiKyujitukyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiKyujitukyu);

		parent::tearDown();
	}

}
