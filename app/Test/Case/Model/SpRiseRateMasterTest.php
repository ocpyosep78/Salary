<?php
App::uses('SpRiseRateMaster', 'Model');

/**
 * SpRiseRateMaster Test Case
 *
 */
class SpRiseRateMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sp_rise_rate_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SpRiseRateMaster = ClassRegistry::init('SpRiseRateMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SpRiseRateMaster);

		parent::tearDown();
	}

}
