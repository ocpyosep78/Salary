<?php
App::uses('JtKihonGakureki', 'Model');

/**
 * JtKihonGakureki Test Case
 *
 */
class JtKihonGakurekiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_gakureki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonGakureki = ClassRegistry::init('JtKihonGakureki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonGakureki);

		parent::tearDown();
	}

}
