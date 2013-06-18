<?php
App::uses('JtKihonSyogai', 'Model');

/**
 * JtKihonSyogai Test Case
 *
 */
class JtKihonSyogaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_syogai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonSyogai = ClassRegistry::init('JtKihonSyogai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonSyogai);

		parent::tearDown();
	}

}
