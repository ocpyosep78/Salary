<?php
App::uses('LicenseMaster', 'Model');

/**
 * LicenseMaster Test Case
 *
 */
class LicenseMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.license_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LicenseMaster = ClassRegistry::init('LicenseMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LicenseMaster);

		parent::tearDown();
	}

}
