<?php
App::uses('QtJisseki', 'Model');

/**
 * QtJisseki Test Case
 *
 */
class QtJissekiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJisseki = ClassRegistry::init('QtJisseki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJisseki);

		parent::tearDown();
	}

}
