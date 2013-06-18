<?php
App::uses('JmJyukenJyotai', 'Model');

/**
 * JmJyukenJyotai Test Case
 *
 */
class JmJyukenJyotaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_jyuken_jyotai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmJyukenJyotai = ClassRegistry::init('JmJyukenJyotai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmJyukenJyotai);

		parent::tearDown();
	}

}
