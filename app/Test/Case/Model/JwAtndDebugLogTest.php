<?php
App::uses('JwAtndDebugLog', 'Model');

/**
 * JwAtndDebugLog Test Case
 *
 */
class JwAtndDebugLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jw_atnd_debug_log'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JwAtndDebugLog = ClassRegistry::init('JwAtndDebugLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JwAtndDebugLog);

		parent::tearDown();
	}

}
