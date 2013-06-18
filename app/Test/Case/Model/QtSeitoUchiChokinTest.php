<?php
App::uses('QtSeitoUchiChokin', 'Model');

/**
 * QtSeitoUchiChokin Test Case
 *
 */
class QtSeitoUchiChokinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_chokin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiChokin = ClassRegistry::init('QtSeitoUchiChokin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiChokin);

		parent::tearDown();
	}

}
