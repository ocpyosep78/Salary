<?php
App::uses('QwMasterKoteiTsuirei', 'Model');

/**
 * QwMasterKoteiTsuirei Test Case
 *
 */
class QwMasterKoteiTsuireiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_master_kotei_tsuirei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMasterKoteiTsuirei = ClassRegistry::init('QwMasterKoteiTsuirei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMasterKoteiTsuirei);

		parent::tearDown();
	}

}
