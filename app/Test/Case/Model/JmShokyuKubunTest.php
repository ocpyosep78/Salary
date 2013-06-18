<?php
App::uses('JmShokyuKubun', 'Model');

/**
 * JmShokyuKubun Test Case
 *
 */
class JmShokyuKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_shokyu_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmShokyuKubun = ClassRegistry::init('JmShokyuKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmShokyuKubun);

		parent::tearDown();
	}

}
