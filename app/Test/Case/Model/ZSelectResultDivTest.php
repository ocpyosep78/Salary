<?php
App::uses('ZSelectResultDiv', 'Model');

/**
 * ZSelectResultDiv Test Case
 *
 */
class ZSelectResultDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_select_result_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZSelectResultDiv = ClassRegistry::init('ZSelectResultDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZSelectResultDiv);

		parent::tearDown();
	}

}
