<?php
App::uses('QmTankaKeisanParent', 'Model');

/**
 * QmTankaKeisanParent Test Case
 *
 */
class QmTankaKeisanParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tanka_keisan_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTankaKeisanParent = ClassRegistry::init('QmTankaKeisanParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTankaKeisanParent);

		parent::tearDown();
	}

}
