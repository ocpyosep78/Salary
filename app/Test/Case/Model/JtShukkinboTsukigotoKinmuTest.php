<?php
App::uses('JtShukkinboTsukigotoKinmu', 'Model');

/**
 * JtShukkinboTsukigotoKinmu Test Case
 *
 */
class JtShukkinboTsukigotoKinmuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_tsukigoto_kinmu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboTsukigotoKinmu = ClassRegistry::init('JtShukkinboTsukigotoKinmu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboTsukigotoKinmu);

		parent::tearDown();
	}

}
