<?php
App::uses('QtSeitoUchiTokkin', 'Model');

/**
 * QtSeitoUchiTokkin Test Case
 *
 */
class QtSeitoUchiTokkinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_tokkin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiTokkin = ClassRegistry::init('QtSeitoUchiTokkin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiTokkin);

		parent::tearDown();
	}

}
