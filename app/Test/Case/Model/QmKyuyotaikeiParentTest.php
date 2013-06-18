<?php
App::uses('QmKyuyotaikeiParent', 'Model');

/**
 * QmKyuyotaikeiParent Test Case
 *
 */
class QmKyuyotaikeiParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuyotaikei_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuyotaikeiParent = ClassRegistry::init('QmKyuyotaikeiParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuyotaikeiParent);

		parent::tearDown();
	}

}
