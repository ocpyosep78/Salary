<?php
App::uses('SmTantoBusho', 'Model');

/**
 * SmTantoBusho Test Case
 *
 */
class SmTantoBushoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_tanto_busho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmTantoBusho = ClassRegistry::init('SmTantoBusho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmTantoBusho);

		parent::tearDown();
	}

}
