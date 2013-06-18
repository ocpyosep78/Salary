<?php
App::uses('QtMeisaiUchiChingin', 'Model');

/**
 * QtMeisaiUchiChingin Test Case
 *
 */
class QtMeisaiUchiChinginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_chingin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiChingin = ClassRegistry::init('QtMeisaiUchiChingin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiChingin);

		parent::tearDown();
	}

}
