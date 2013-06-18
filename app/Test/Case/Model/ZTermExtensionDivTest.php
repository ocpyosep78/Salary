<?php
App::uses('ZTermExtensionDiv', 'Model');

/**
 * ZTermExtensionDiv Test Case
 *
 */
class ZTermExtensionDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_term_extension_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZTermExtensionDiv = ClassRegistry::init('ZTermExtensionDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZTermExtensionDiv);

		parent::tearDown();
	}

}
