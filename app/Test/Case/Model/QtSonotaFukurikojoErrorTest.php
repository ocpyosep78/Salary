<?php
App::uses('QtSonotaFukurikojoError', 'Model');

/**
 * QtSonotaFukurikojoError Test Case
 *
 */
class QtSonotaFukurikojoErrorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_sonota_fukurikojo_error'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSonotaFukurikojoError = ClassRegistry::init('QtSonotaFukurikojoError');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSonotaFukurikojoError);

		parent::tearDown();
	}

}
