<?php
App::uses('DependentAllowanceMaster', 'Model');

/**
 * DependentAllowanceMaster Test Case
 *
 */
class DependentAllowanceMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dependent_allowance_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DependentAllowanceMaster = ClassRegistry::init('DependentAllowanceMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DependentAllowanceMaster);

		parent::tearDown();
	}

}
