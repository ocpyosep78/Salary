<?php
App::uses('JtKihonJusyo', 'Model');

/**
 * JtKihonJusyo Test Case
 *
 */
class JtKihonJusyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_jusyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonJusyo = ClassRegistry::init('JtKihonJusyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonJusyo);

		parent::tearDown();
	}

}
