<?php
App::uses('QmTaJiyubetuShikyuritu', 'Model');

/**
 * QmTaJiyubetuShikyuritu Test Case
 *
 */
class QmTaJiyubetuShikyurituTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_jiyubetu_shikyuritu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaJiyubetuShikyuritu = ClassRegistry::init('QmTaJiyubetuShikyuritu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaJiyubetuShikyuritu);

		parent::tearDown();
	}

}
