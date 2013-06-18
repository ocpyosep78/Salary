<?php
App::uses('JmJimusho', 'Model');

/**
 * JmJimusho Test Case
 *
 */
class JmJimushoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_jimusho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmJimusho = ClassRegistry::init('JmJimusho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmJimusho);

		parent::tearDown();
	}

}
