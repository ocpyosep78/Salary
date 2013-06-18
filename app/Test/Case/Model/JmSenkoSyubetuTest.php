<?php
App::uses('JmSenkoSyubetu', 'Model');

/**
 * JmSenkoSyubetu Test Case
 *
 */
class JmSenkoSyubetuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_senko_syubetu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmSenkoSyubetu = ClassRegistry::init('JmSenkoSyubetu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmSenkoSyubetu);

		parent::tearDown();
	}

}
