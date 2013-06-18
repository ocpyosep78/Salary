<?php
App::uses('QtJissekiUchiKantoku', 'Model');

/**
 * QtJissekiUchiKantoku Test Case
 *
 */
class QtJissekiUchiKantokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_kantoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiKantoku = ClassRegistry::init('QtJissekiUchiKantoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiKantoku);

		parent::tearDown();
	}

}
