<?php
App::uses('ZPayRiseAdjMaster', 'Model');

/**
 * ZPayRiseAdjMaster Test Case
 *
 */
class ZPayRiseAdjMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_pay_rise_adj_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZPayRiseAdjMaster = ClassRegistry::init('ZPayRiseAdjMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZPayRiseAdjMaster);

		parent::tearDown();
	}

}
