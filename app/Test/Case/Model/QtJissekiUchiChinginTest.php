<?php
App::uses('QtJissekiUchiChingin', 'Model');

/**
 * QtJissekiUchiChingin Test Case
 *
 */
class QtJissekiUchiChinginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_chingin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiChingin = ClassRegistry::init('QtJissekiUchiChingin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiChingin);

		parent::tearDown();
	}

}
