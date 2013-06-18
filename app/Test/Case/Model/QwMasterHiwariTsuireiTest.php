<?php
App::uses('QwMasterHiwariTsuirei', 'Model');

/**
 * QwMasterHiwariTsuirei Test Case
 *
 */
class QwMasterHiwariTsuireiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_master_hiwari_tsuirei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMasterHiwariTsuirei = ClassRegistry::init('QwMasterHiwariTsuirei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMasterHiwariTsuirei);

		parent::tearDown();
	}

}
