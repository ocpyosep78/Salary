<?php
App::uses('QmKyuyotaikeiChild2', 'Model');

/**
 * QmKyuyotaikeiChild2 Test Case
 *
 */
class QmKyuyotaikeiChild2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuyotaikei_child2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuyotaikeiChild2 = ClassRegistry::init('QmKyuyotaikeiChild2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuyotaikeiChild2);

		parent::tearDown();
	}

}
