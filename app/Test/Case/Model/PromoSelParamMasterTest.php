<?php
App::uses('PromoSelParamMaster', 'Model');

/**
 * PromoSelParamMaster Test Case
 *
 */
class PromoSelParamMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promo_sel_param_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PromoSelParamMaster = ClassRegistry::init('PromoSelParamMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PromoSelParamMaster);

		parent::tearDown();
	}

}
