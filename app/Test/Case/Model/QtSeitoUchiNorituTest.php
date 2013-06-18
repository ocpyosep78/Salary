<?php
App::uses('QtSeitoUchiNoritu', 'Model');

/**
 * QtSeitoUchiNoritu Test Case
 *
 */
class QtSeitoUchiNorituTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_noritu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiNoritu = ClassRegistry::init('QtSeitoUchiNoritu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiNoritu);

		parent::tearDown();
	}

}
