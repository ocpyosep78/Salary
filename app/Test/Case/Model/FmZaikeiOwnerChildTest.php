<?php
App::uses('FmZaikeiOwnerChild', 'Model');

/**
 * FmZaikeiOwnerChild Test Case
 *
 */
class FmZaikeiOwnerChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_zaikei_owner_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmZaikeiOwnerChild = ClassRegistry::init('FmZaikeiOwnerChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmZaikeiOwnerChild);

		parent::tearDown();
	}

}
