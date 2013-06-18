<?php
App::uses('QtJissekiUchiRyohi', 'Model');

/**
 * QtJissekiUchiRyohi Test Case
 *
 */
class QtJissekiUchiRyohiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_ryohi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiRyohi = ClassRegistry::init('QtJissekiUchiRyohi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiRyohi);

		parent::tearDown();
	}

}
