<?php
App::uses('QtSeitoUchiShuku', 'Model');

/**
 * QtSeitoUchiShuku Test Case
 *
 */
class QtSeitoUchiShukuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_shuku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiShuku = ClassRegistry::init('QtSeitoUchiShuku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiShuku);

		parent::tearDown();
	}

}
