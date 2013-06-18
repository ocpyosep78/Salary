<?php
App::uses('PersonFamilyInfo', 'Model');

/**
 * PersonFamilyInfo Test Case
 *
 */
class PersonFamilyInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.person_family_info'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PersonFamilyInfo = ClassRegistry::init('PersonFamilyInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonFamilyInfo);

		parent::tearDown();
	}

}
