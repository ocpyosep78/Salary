<?php
App::uses('QtFukurikojoTemp', 'Model');

/**
 * QtFukurikojoTemp Test Case
 *
 */
class QtFukurikojoTempTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_fukurikojo_temp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtFukurikojoTemp = ClassRegistry::init('QtFukurikojoTemp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtFukurikojoTemp);

		parent::tearDown();
	}

}
