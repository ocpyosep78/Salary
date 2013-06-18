<?php
App::uses('QtJissekiUchiYakin', 'Model');

/**
 * QtJissekiUchiYakin Test Case
 *
 */
class QtJissekiUchiYakinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_jisseki_uchi_yakin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtJissekiUchiYakin = ClassRegistry::init('QtJissekiUchiYakin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtJissekiUchiYakin);

		parent::tearDown();
	}

}
