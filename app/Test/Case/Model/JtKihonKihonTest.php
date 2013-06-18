<?php
App::uses('JtKihonKihon', 'Model');

/**
 * JtKihonKihon Test Case
 *
 */
class JtKihonKihonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_kihon'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonKihon = ClassRegistry::init('JtKihonKihon');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonKihon);

		parent::tearDown();
	}

}
