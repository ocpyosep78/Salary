<?php
App::uses('QtSeitoHiwari', 'Model');

/**
 * QtSeitoHiwari Test Case
 *
 */
class QtSeitoHiwariTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_hiwari'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoHiwari = ClassRegistry::init('QtSeitoHiwari');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoHiwari);

		parent::tearDown();
	}

}
