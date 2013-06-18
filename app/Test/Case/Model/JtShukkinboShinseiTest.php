<?php
App::uses('JtShukkinboShinsei', 'Model');

/**
 * JtShukkinboShinsei Test Case
 *
 */
class JtShukkinboShinseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_shinsei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboShinsei = ClassRegistry::init('JtShukkinboShinsei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboShinsei);

		parent::tearDown();
	}

}
