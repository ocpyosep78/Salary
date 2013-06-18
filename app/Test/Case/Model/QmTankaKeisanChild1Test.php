<?php
App::uses('QmTankaKeisanChild1', 'Model');

/**
 * QmTankaKeisanChild1 Test Case
 *
 */
class QmTankaKeisanChild1Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tanka_keisan_child1'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTankaKeisanChild1 = ClassRegistry::init('QmTankaKeisanChild1');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTankaKeisanChild1);

		parent::tearDown();
	}

}
