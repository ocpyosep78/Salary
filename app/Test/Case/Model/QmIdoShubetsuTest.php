<?php
App::uses('QmIdoShubetsu', 'Model');

/**
 * QmIdoShubetsu Test Case
 *
 */
class QmIdoShubetsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ido_shubetsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmIdoShubetsu = ClassRegistry::init('QmIdoShubetsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmIdoShubetsu);

		parent::tearDown();
	}

}
