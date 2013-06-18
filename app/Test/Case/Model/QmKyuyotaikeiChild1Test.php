<?php
App::uses('QmKyuyotaikeiChild1', 'Model');

/**
 * QmKyuyotaikeiChild1 Test Case
 *
 */
class QmKyuyotaikeiChild1Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuyotaikei_child1'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuyotaikeiChild1 = ClassRegistry::init('QmKyuyotaikeiChild1');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuyotaikeiChild1);

		parent::tearDown();
	}

}
