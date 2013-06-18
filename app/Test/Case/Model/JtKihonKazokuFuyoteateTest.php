<?php
App::uses('JtKihonKazokuFuyoteate', 'Model');

/**
 * JtKihonKazokuFuyoteate Test Case
 *
 */
class JtKihonKazokuFuyoteateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_kazoku_fuyoteate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonKazokuFuyoteate = ClassRegistry::init('JtKihonKazokuFuyoteate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonKazokuFuyoteate);

		parent::tearDown();
	}

}
