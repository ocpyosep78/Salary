<?php
App::uses('AddressMaster', 'Model');

/**
 * AddressMaster Test Case
 *
 */
class AddressMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.address_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AddressMaster = ClassRegistry::init('AddressMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AddressMaster);

		parent::tearDown();
	}

}
