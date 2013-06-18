<?php
App::uses('JtShukkinboHigotoShinsei', 'Model');

/**
 * JtShukkinboHigotoShinsei Test Case
 *
 */
class JtShukkinboHigotoShinseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_higoto_shinsei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboHigotoShinsei = ClassRegistry::init('JtShukkinboHigotoShinsei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboHigotoShinsei);

		parent::tearDown();
	}

}
