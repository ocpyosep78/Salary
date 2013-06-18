<?php
App::uses('QwKamokuKyosaiKakekin', 'Model');

/**
 * QwKamokuKyosaiKakekin Test Case
 *
 */
class QwKamokuKyosaiKakekinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_kamoku_kyosai_kakekin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwKamokuKyosaiKakekin = ClassRegistry::init('QwKamokuKyosaiKakekin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwKamokuKyosaiKakekin);

		parent::tearDown();
	}

}
