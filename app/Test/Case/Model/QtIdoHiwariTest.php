<?php
App::uses('QtIdoHiwari', 'Model');

/**
 * QtIdoHiwari Test Case
 *
 */
class QtIdoHiwariTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_ido_hiwari'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtIdoHiwari = ClassRegistry::init('QtIdoHiwari');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtIdoHiwari);

		parent::tearDown();
	}

}
