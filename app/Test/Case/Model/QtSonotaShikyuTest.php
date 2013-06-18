<?php
App::uses('QtSonotaShikyu', 'Model');

/**
 * QtSonotaShikyu Test Case
 *
 */
class QtSonotaShikyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_sonota_shikyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSonotaShikyu = ClassRegistry::init('QtSonotaShikyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSonotaShikyu);

		parent::tearDown();
	}

}
