<?php
App::uses('QmSiharaishaChild2', 'Model');

/**
 * QmSiharaishaChild2 Test Case
 *
 */
class QmSiharaishaChild2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_siharaisha_child2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSiharaishaChild2 = ClassRegistry::init('QmSiharaishaChild2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSiharaishaChild2);

		parent::tearDown();
	}

}
