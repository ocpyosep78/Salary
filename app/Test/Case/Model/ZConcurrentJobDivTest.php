<?php
App::uses('ZConcurrentJobDiv', 'Model');

/**
 * ZConcurrentJobDiv Test Case
 *
 */
class ZConcurrentJobDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_concurrent_job_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZConcurrentJobDiv = ClassRegistry::init('ZConcurrentJobDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZConcurrentJobDiv);

		parent::tearDown();
	}

}
