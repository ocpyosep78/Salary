<?php
App::uses('ZSexDiv', 'Model');

/**
 * ZSexDiv Test Case
 *
 */
class ZSexDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_sex_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZSexDiv = ClassRegistry::init('ZSexDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZSexDiv);

		parent::tearDown();
	}

}
