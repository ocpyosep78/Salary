<?php
App::uses('JvShokyuYotei', 'Model');

/**
 * JvShokyuYotei Test Case
 *
 */
class JvShokyuYoteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jv_shokyu_yotei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JvShokyuYotei = ClassRegistry::init('JvShokyuYotei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JvShokyuYotei);

		parent::tearDown();
	}

}
