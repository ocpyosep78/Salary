<?php
App::uses('PromoTypeMaster', 'Model');

/**
 * PromoTypeMaster Test Case
 *
 */
class PromoTypeMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promo_type_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PromoTypeMaster = ClassRegistry::init('PromoTypeMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PromoTypeMaster);

		parent::tearDown();
	}

}
