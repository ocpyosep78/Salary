<?php
App::uses('QtMeisaiUchiChokin', 'Model');

/**
 * QtMeisaiUchiChokin Test Case
 *
 */
class QtMeisaiUchiChokinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_chokin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiChokin = ClassRegistry::init('QtMeisaiUchiChokin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiChokin);

		parent::tearDown();
	}

}
