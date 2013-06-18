<?php
App::uses('QtMeisaiUchiFukurikojo', 'Model');

/**
 * QtMeisaiUchiFukurikojo Test Case
 *
 */
class QtMeisaiUchiFukurikojoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_fukurikojo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiFukurikojo = ClassRegistry::init('QtMeisaiUchiFukurikojo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiFukurikojo);

		parent::tearDown();
	}

}
