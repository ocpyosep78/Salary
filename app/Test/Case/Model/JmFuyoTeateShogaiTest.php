<?php
App::uses('JmFuyoTeateShogai', 'Model');

/**
 * JmFuyoTeateShogai Test Case
 *
 */
class JmFuyoTeateShogaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_fuyo_teate_shogai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmFuyoTeateShogai = ClassRegistry::init('JmFuyoTeateShogai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmFuyoTeateShogai);

		parent::tearDown();
	}

}
