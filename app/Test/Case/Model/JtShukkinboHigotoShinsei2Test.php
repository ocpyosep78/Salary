<?php
App::uses('JtShukkinboHigotoShinsei2', 'Model');

/**
 * JtShukkinboHigotoShinsei2 Test Case
 *
 */
class JtShukkinboHigotoShinsei2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_higoto_shinsei2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboHigotoShinsei2 = ClassRegistry::init('JtShukkinboHigotoShinsei2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboHigotoShinsei2);

		parent::tearDown();
	}

}
