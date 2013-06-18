<?php
App::uses('JmSyokuinKubun', 'Model');

/**
 * JmSyokuinKubun Test Case
 *
 */
class JmSyokuinKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_syokuin_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmSyokuinKubun = ClassRegistry::init('JmSyokuinKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmSyokuinKubun);

		parent::tearDown();
	}

}
