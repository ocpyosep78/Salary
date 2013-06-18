<?php
App::uses('ZChildAllowDiv', 'Model');

/**
 * ZChildAllowDiv Test Case
 *
 */
class ZChildAllowDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_child_allow_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZChildAllowDiv = ClassRegistry::init('ZChildAllowDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZChildAllowDiv);

		parent::tearDown();
	}

}
