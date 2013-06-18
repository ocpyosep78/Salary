<?php
App::uses('JmKinmuKyujitsu', 'Model');

/**
 * JmKinmuKyujitsu Test Case
 *
 */
class JmKinmuKyujitsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_kinmu_kyujitsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmKinmuKyujitsu = ClassRegistry::init('JmKinmuKyujitsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmKinmuKyujitsu);

		parent::tearDown();
	}

}
