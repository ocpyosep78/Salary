<?php
App::uses('ZReductionExtensionDiv', 'Model');

/**
 * ZReductionExtensionDiv Test Case
 *
 */
class ZReductionExtensionDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_reduction_extension_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZReductionExtensionDiv = ClassRegistry::init('ZReductionExtensionDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZReductionExtensionDiv);

		parent::tearDown();
	}

}
