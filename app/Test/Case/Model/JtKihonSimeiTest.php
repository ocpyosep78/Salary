<?php
App::uses('JtKihonSimei', 'Model');

/**
 * JtKihonSimei Test Case
 *
 */
class JtKihonSimeiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_simei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonSimei = ClassRegistry::init('JtKihonSimei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonSimei);

		parent::tearDown();
	}

}
