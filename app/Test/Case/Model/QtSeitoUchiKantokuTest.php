<?php
App::uses('QtSeitoUchiKantoku', 'Model');

/**
 * QtSeitoUchiKantoku Test Case
 *
 */
class QtSeitoUchiKantokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_kantoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiKantoku = ClassRegistry::init('QtSeitoUchiKantoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiKantoku);

		parent::tearDown();
	}

}
