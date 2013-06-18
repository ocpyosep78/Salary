<?php
App::uses('QmTanfuTeateParent', 'Model');

/**
 * QmTanfuTeateParent Test Case
 *
 */
class QmTanfuTeateParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tanfu_teate_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTanfuTeateParent = ClassRegistry::init('QmTanfuTeateParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTanfuTeateParent);

		parent::tearDown();
	}

}
