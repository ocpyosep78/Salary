<?php
App::uses('JmKoryuHakenKubun', 'Model');

/**
 * JmKoryuHakenKubun Test Case
 *
 */
class JmKoryuHakenKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_koryu_haken_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmKoryuHakenKubun = ClassRegistry::init('JmKoryuHakenKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmKoryuHakenKubun);

		parent::tearDown();
	}

}
