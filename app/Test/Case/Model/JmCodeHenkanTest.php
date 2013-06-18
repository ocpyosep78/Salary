<?php
App::uses('JmCodeHenkan', 'Model');

/**
 * JmCodeHenkan Test Case
 *
 */
class JmCodeHenkanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_code_henkan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmCodeHenkan = ClassRegistry::init('JmCodeHenkan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmCodeHenkan);

		parent::tearDown();
	}

}
