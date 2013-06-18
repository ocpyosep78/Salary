<?php
App::uses('JwKinmuShosai', 'Model');

/**
 * JwKinmuShosai Test Case
 *
 */
class JwKinmuShosaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jw_kinmu_shosai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JwKinmuShosai = ClassRegistry::init('JwKinmuShosai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JwKinmuShosai);

		parent::tearDown();
	}

}
