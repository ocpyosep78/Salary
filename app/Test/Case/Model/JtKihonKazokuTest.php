<?php
App::uses('JtKihonKazoku', 'Model');

/**
 * JtKihonKazoku Test Case
 *
 */
class JtKihonKazokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_kazoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonKazoku = ClassRegistry::init('JtKihonKazoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonKazoku);

		parent::tearDown();
	}

}
