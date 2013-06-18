<?php
App::uses('SmJoseiken', 'Model');

/**
 * SmJoseiken Test Case
 *
 */
class SmJoseikenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_joseiken'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmJoseiken = ClassRegistry::init('SmJoseiken');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmJoseiken);

		parent::tearDown();
	}

}
