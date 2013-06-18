<?php
App::uses('QmTaPointFuyo', 'Model');

/**
 * QmTaPointFuyo Test Case
 *
 */
class QmTaPointFuyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_point_fuyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaPointFuyo = ClassRegistry::init('QmTaPointFuyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaPointFuyo);

		parent::tearDown();
	}

}
