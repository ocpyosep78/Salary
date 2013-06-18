<?php
App::uses('QtJissekiUchiNoritu2', 'Model');

/**
 * QtJissekiUchiNoritu2 Test Case
 *
 */
class QtJissekiUchiNoritu2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_noritu2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiNoritu2 = ClassRegistry::init('QtJissekiUchiNoritu2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiNoritu2);

		parent::tearDown();
	}

}
