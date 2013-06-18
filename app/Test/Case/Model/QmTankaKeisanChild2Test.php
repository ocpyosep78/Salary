<?php
App::uses('QmTankaKeisanChild2', 'Model');

/**
 * QmTankaKeisanChild2 Test Case
 *
 */
class QmTankaKeisanChild2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tanka_keisan_child2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTankaKeisanChild2 = ClassRegistry::init('QmTankaKeisanChild2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTankaKeisanChild2);

		parent::tearDown();
	}

}
