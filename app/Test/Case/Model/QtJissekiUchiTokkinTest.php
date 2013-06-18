<?php
App::uses('QtJissekiUchiTokkin', 'Model');

/**
 * QtJissekiUchiTokkin Test Case
 *
 */
class QtJissekiUchiTokkinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_tokkin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiTokkin = ClassRegistry::init('QtJissekiUchiTokkin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiTokkin);

		parent::tearDown();
	}

}
