<?php
App::uses('ZPensEnrollDiv', 'Model');

/**
 * ZPensEnrollDiv Test Case
 *
 */
class ZPensEnrollDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_pens_enroll_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZPensEnrollDiv = ClassRegistry::init('ZPensEnrollDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZPensEnrollDiv);

		parent::tearDown();
	}

}
