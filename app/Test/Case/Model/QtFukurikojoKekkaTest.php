<?php
App::uses('QtFukurikojoKekka', 'Model');

/**
 * QtFukurikojoKekka Test Case
 *
 */
class QtFukurikojoKekkaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_fukurikojo_kekka'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtFukurikojoKekka = ClassRegistry::init('QtFukurikojoKekka');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtFukurikojoKekka);

		parent::tearDown();
	}

}
