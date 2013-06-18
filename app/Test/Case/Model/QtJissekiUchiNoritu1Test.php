<?php
App::uses('QtJissekiUchiNoritu1', 'Model');

/**
 * QtJissekiUchiNoritu1 Test Case
 *
 */
class QtJissekiUchiNoritu1Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_noritu1'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiNoritu1 = ClassRegistry::init('QtJissekiUchiNoritu1');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiNoritu1);

		parent::tearDown();
	}

}
