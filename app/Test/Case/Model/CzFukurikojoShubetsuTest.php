<?php
App::uses('CzFukurikojoShubetsu', 'Model');

/**
 * CzFukurikojoShubetsu Test Case
 *
 */
class CzFukurikojoShubetsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_fukurikojo_shubetsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzFukurikojoShubetsu = ClassRegistry::init('CzFukurikojoShubetsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzFukurikojoShubetsu);

		parent::tearDown();
	}

}
