<?php
App::uses('FmZaikeiOwnerParent', 'Model');

/**
 * FmZaikeiOwnerParent Test Case
 *
 */
class FmZaikeiOwnerParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_zaikei_owner_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmZaikeiOwnerParent = ClassRegistry::init('FmZaikeiOwnerParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmZaikeiOwnerParent);

		parent::tearDown();
	}

}
