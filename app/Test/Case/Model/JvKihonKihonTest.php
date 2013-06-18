<?php
App::uses('JvKihonKihon', 'Model');

/**
 * JvKihonKihon Test Case
 *
 */
class JvKihonKihonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jv_kihon_kihon'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JvKihonKihon = ClassRegistry::init('JvKihonKihon');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JvKihonKihon);

		parent::tearDown();
	}

}
