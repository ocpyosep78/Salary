<?php
App::uses('ZFamilyRelationMaster', 'Model');

/**
 * ZFamilyRelationMaster Test Case
 *
 */
class ZFamilyRelationMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_family_relation_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZFamilyRelationMaster = ClassRegistry::init('ZFamilyRelationMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZFamilyRelationMaster);

		parent::tearDown();
	}

}
