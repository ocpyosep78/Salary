<?php
App::uses('QmTaShotokuZei', 'Model');

/**
 * QmTaShotokuZei Test Case
 *
 */
class QmTaShotokuZeiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_shotoku_zei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaShotokuZei = ClassRegistry::init('QmTaShotokuZei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaShotokuZei);

		parent::tearDown();
	}

}
