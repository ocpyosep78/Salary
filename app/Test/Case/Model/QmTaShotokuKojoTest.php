<?php
App::uses('QmTaShotokuKojo', 'Model');

/**
 * QmTaShotokuKojo Test Case
 *
 */
class QmTaShotokuKojoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_shotoku_kojo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaShotokuKojo = ClassRegistry::init('QmTaShotokuKojo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaShotokuKojo);

		parent::tearDown();
	}

}
