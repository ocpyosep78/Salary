<?php
App::uses('QmSiharaishaParent', 'Model');

/**
 * QmSiharaishaParent Test Case
 *
 */
class QmSiharaishaParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_siharaisha_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSiharaishaParent = ClassRegistry::init('QmSiharaishaParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSiharaishaParent);

		parent::tearDown();
	}

}
