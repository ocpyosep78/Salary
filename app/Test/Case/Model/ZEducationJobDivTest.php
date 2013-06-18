<?php
App::uses('ZEducationJobDiv', 'Model');

/**
 * ZEducationJobDiv Test Case
 *
 */
class ZEducationJobDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_education_job_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZEducationJobDiv = ClassRegistry::init('ZEducationJobDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZEducationJobDiv);

		parent::tearDown();
	}

}
