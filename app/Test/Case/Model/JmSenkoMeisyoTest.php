<?php
App::uses('JmSenkoMeisyo', 'Model');

/**
 * JmSenkoMeisyo Test Case
 *
 */
class JmSenkoMeisyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_senko_meisyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmSenkoMeisyo = ClassRegistry::init('JmSenkoMeisyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmSenkoMeisyo);

		parent::tearDown();
	}

}
