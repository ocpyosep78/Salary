<?php
App::uses('JmShogaiKubun', 'Model');

/**
 * JmShogaiKubun Test Case
 *
 */
class JmShogaiKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_shogai_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmShogaiKubun = ClassRegistry::init('JmShogaiKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmShogaiKubun);

		parent::tearDown();
	}

}
