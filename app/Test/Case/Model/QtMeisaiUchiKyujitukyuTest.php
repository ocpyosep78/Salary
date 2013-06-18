<?php
App::uses('QtMeisaiUchiKyujitukyu', 'Model');

/**
 * QtMeisaiUchiKyujitukyu Test Case
 *
 */
class QtMeisaiUchiKyujitukyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_kyujitukyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiKyujitukyu = ClassRegistry::init('QtMeisaiUchiKyujitukyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiKyujitukyu);

		parent::tearDown();
	}

}
