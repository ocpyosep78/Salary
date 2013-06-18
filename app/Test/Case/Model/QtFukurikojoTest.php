<?php
App::uses('QtFukurikojo', 'Model');

/**
 * QtFukurikojo Test Case
 *
 */
class QtFukurikojoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_fukurikojo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtFukurikojo = ClassRegistry::init('QtFukurikojo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtFukurikojo);

		parent::tearDown();
	}

}
