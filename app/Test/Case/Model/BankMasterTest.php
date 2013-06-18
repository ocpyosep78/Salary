<?php
App::uses('BankMaster', 'Model');

/**
 * BankMaster Test Case
 *
 */
class BankMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bank_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BankMaster = ClassRegistry::init('BankMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BankMaster);

		parent::tearDown();
	}

}
