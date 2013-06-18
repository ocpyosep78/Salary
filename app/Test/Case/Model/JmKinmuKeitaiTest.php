<?php
App::uses('JmKinmuKeitai', 'Model');

/**
 * JmKinmuKeitai Test Case
 *
 */
class JmKinmuKeitaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_kinmu_keitai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmKinmuKeitai = ClassRegistry::init('JmKinmuKeitai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmKinmuKeitai);

		parent::tearDown();
	}

}
