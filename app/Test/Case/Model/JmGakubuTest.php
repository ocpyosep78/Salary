<?php
App::uses('JmGakubu', 'Model');

/**
 * JmGakubu Test Case
 *
 */
class JmGakubuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_gakubu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmGakubu = ClassRegistry::init('JmGakubu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmGakubu);

		parent::tearDown();
	}

}
