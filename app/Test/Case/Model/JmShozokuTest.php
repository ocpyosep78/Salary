<?php
App::uses('JmShozoku', 'Model');

/**
 * JmShozoku Test Case
 *
 */
class JmShozokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_shozoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmShozoku = ClassRegistry::init('JmShozoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmShozoku);

		parent::tearDown();
	}

}
