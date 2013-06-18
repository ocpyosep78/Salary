<?php
App::uses('QtJissekiUchiShuku', 'Model');

/**
 * QtJissekiUchiShuku Test Case
 *
 */
class QtJissekiUchiShukuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_shuku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiShuku = ClassRegistry::init('QtJissekiUchiShuku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiShuku);

		parent::tearDown();
	}

}
