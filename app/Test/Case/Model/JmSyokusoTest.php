<?php
App::uses('JmSyokuso', 'Model');

/**
 * JmSyokuso Test Case
 *
 */
class JmSyokusoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_syokuso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmSyokuso = ClassRegistry::init('JmSyokuso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmSyokuso);

		parent::tearDown();
	}

}
