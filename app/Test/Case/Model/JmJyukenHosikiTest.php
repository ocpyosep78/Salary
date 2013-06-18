<?php
App::uses('JmJyukenHosiki', 'Model');

/**
 * JmJyukenHosiki Test Case
 *
 */
class JmJyukenHosikiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_jyuken_hosiki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmJyukenHosiki = ClassRegistry::init('JmJyukenHosiki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmJyukenHosiki);

		parent::tearDown();
	}

}
