<?php
App::uses('JtShukkinboShinsei2', 'Model');

/**
 * JtShukkinboShinsei2 Test Case
 *
 */
class JtShukkinboShinsei2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_shinsei2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboShinsei2 = ClassRegistry::init('JtShukkinboShinsei2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboShinsei2);

		parent::tearDown();
	}

}
