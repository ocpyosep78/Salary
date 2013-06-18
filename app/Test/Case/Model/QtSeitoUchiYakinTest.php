<?php
App::uses('QtSeitoUchiYakin', 'Model');

/**
 * QtSeitoUchiYakin Test Case
 *
 */
class QtSeitoUchiYakinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_yakin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiYakin = ClassRegistry::init('QtSeitoUchiYakin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiYakin);

		parent::tearDown();
	}

}
