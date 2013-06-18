<?php
App::uses('QtSonotaFukurikojo', 'Model');

/**
 * QtSonotaFukurikojo Test Case
 *
 */
class QtSonotaFukurikojoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_sonota_fukurikojo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSonotaFukurikojo = ClassRegistry::init('QtSonotaFukurikojo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSonotaFukurikojo);

		parent::tearDown();
	}

}
