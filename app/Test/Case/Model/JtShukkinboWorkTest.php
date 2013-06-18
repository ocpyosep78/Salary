<?php
App::uses('JtShukkinboWork', 'Model');

/**
 * JtShukkinboWork Test Case
 *
 */
class JtShukkinboWorkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_work'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboWork = ClassRegistry::init('JtShukkinboWork');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboWork);

		parent::tearDown();
	}

}
