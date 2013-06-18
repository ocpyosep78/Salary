<?php
App::uses('JtKihonKazokuJidoteate', 'Model');

/**
 * JtKihonKazokuJidoteate Test Case
 *
 */
class JtKihonKazokuJidoteateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_kazoku_jidoteate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonKazokuJidoteate = ClassRegistry::init('JtKihonKazokuJidoteate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonKazokuJidoteate);

		parent::tearDown();
	}

}
