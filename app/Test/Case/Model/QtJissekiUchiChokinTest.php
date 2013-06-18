<?php
App::uses('QtJissekiUchiChokin', 'Model');

/**
 * QtJissekiUchiChokin Test Case
 *
 */
class QtJissekiUchiChokinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_chokin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiChokin = ClassRegistry::init('QtJissekiUchiChokin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiChokin);

		parent::tearDown();
	}

}
