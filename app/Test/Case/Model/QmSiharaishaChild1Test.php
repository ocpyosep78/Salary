<?php
App::uses('QmSiharaishaChild1', 'Model');

/**
 * QmSiharaishaChild1 Test Case
 *
 */
class QmSiharaishaChild1Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_siharaisha_child1'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSiharaishaChild1 = ClassRegistry::init('QmSiharaishaChild1');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSiharaishaChild1);

		parent::tearDown();
	}

}
