<?php
App::uses('OrganisationMaster', 'Model');

/**
 * OrganisationMaster Test Case
 *
 */
class OrganisationMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.organisation_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrganisationMaster = ClassRegistry::init('OrganisationMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrganisationMaster);

		parent::tearDown();
	}

}
