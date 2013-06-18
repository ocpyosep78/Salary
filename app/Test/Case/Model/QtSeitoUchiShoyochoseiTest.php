<?php
App::uses('QtSeitoUchiShoyochosei', 'Model');

/**
 * QtSeitoUchiShoyochosei Test Case
 *
 */
class QtSeitoUchiShoyochoseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_shoyochosei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiShoyochosei = ClassRegistry::init('QtSeitoUchiShoyochosei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiShoyochosei);

		parent::tearDown();
	}

}
