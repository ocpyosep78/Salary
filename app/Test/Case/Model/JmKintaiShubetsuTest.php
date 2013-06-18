<?php
App::uses('JmKintaiShubetsu', 'Model');

/**
 * JmKintaiShubetsu Test Case
 *
 */
class JmKintaiShubetsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_kintai_shubetsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmKintaiShubetsu = ClassRegistry::init('JmKintaiShubetsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmKintaiShubetsu);

		parent::tearDown();
	}

}
