<?php
App::uses('QtSeitoHendo', 'Model');

/**
 * QtSeitoHendo Test Case
 *
 */
class QtSeitoHendoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_hendo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoHendo = ClassRegistry::init('QtSeitoHendo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoHendo);

		parent::tearDown();
	}

}
