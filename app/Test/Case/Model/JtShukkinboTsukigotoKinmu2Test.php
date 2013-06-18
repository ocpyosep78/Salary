<?php
App::uses('JtShukkinboTsukigotoKinmu2', 'Model');

/**
 * JtShukkinboTsukigotoKinmu2 Test Case
 *
 */
class JtShukkinboTsukigotoKinmu2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_tsukigoto_kinmu2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboTsukigotoKinmu2 = ClassRegistry::init('JtShukkinboTsukigotoKinmu2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboTsukigotoKinmu2);

		parent::tearDown();
	}

}
