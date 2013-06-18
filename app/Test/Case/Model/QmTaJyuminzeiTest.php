<?php
App::uses('QmTaJyuminzei', 'Model');

/**
 * QmTaJyuminzei Test Case
 *
 */
class QmTaJyuminzeiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_jyuminzei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaJyuminzei = ClassRegistry::init('QmTaJyuminzei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaJyuminzei);

		parent::tearDown();
	}

}
