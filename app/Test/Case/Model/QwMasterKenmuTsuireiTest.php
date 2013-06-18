<?php
App::uses('QwMasterKenmuTsuirei', 'Model');

/**
 * QwMasterKenmuTsuirei Test Case
 *
 */
class QwMasterKenmuTsuireiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_master_kenmu_tsuirei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMasterKenmuTsuirei = ClassRegistry::init('QwMasterKenmuTsuirei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMasterKenmuTsuirei);

		parent::tearDown();
	}

}
