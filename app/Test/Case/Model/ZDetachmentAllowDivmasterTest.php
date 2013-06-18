<?php
App::uses('ZDetachmentAllowDivmaster', 'Model');

/**
 * ZDetachmentAllowDivmaster Test Case
 *
 */
class ZDetachmentAllowDivmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_detachment_allow_divmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZDetachmentAllowDivmaster = ClassRegistry::init('ZDetachmentAllowDivmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZDetachmentAllowDivmaster);

		parent::tearDown();
	}

}
