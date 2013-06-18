<?php
App::uses('QtMeisai', 'Model');

/**
 * QtMeisai Test Case
 *
 */
class QtMeisaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisai = ClassRegistry::init('QtMeisai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisai);

		parent::tearDown();
	}

}
