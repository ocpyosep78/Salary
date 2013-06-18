<?php
App::uses('JmYubinBangou', 'Model');

/**
 * JmYubinBangou Test Case
 *
 */
class JmYubinBangouTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_yubin_bangou'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmYubinBangou = ClassRegistry::init('JmYubinBangou');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmYubinBangou);

		parent::tearDown();
	}

}
