<?php
App::uses('BeforeHiredTypeMaster', 'Model');

/**
 * BeforeHiredTypeMaster Test Case
 *
 */
class BeforeHiredTypeMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.before_hired_type_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BeforeHiredTypeMaster = ClassRegistry::init('BeforeHiredTypeMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BeforeHiredTypeMaster);

		parent::tearDown();
	}

}
