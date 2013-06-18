<?php
App::uses('JtRireki', 'Model');

/**
 * JtRireki Test Case
 *
 */
class JtRirekiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_rireki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtRireki = ClassRegistry::init('JtRireki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtRireki);

		parent::tearDown();
	}

}
