<?php
App::uses('NationalityMaster', 'Model');

/**
 * NationalityMaster Test Case
 *
 */
class NationalityMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nationality_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NationalityMaster = ClassRegistry::init('NationalityMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NationalityMaster);

		parent::tearDown();
	}

}
