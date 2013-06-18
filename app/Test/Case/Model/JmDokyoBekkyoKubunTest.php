<?php
App::uses('JmDokyoBekkyoKubun', 'Model');

/**
 * JmDokyoBekkyoKubun Test Case
 *
 */
class JmDokyoBekkyoKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_dokyo_bekkyo_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmDokyoBekkyoKubun = ClassRegistry::init('JmDokyoBekkyoKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmDokyoBekkyoKubun);

		parent::tearDown();
	}

}
