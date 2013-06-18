<?php
App::uses('JtKihonSikaku', 'Model');

/**
 * JtKihonSikaku Test Case
 *
 */
class JtKihonSikakuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_sikaku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonSikaku = ClassRegistry::init('JtKihonSikaku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonSikaku);

		parent::tearDown();
	}

}
