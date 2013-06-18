<?php
App::uses('QtFurikomiKoza', 'Model');

/**
 * QtFurikomiKoza Test Case
 *
 */
class QtFurikomiKozaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_furikomi_koza'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtFurikomiKoza = ClassRegistry::init('QtFurikomiKoza');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtFurikomiKoza);

		parent::tearDown();
	}

}
