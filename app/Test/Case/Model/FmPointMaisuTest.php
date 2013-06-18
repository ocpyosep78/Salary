<?php
App::uses('FmPointMaisu', 'Model');

/**
 * FmPointMaisu Test Case
 *
 */
class FmPointMaisuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_point_maisu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmPointMaisu = ClassRegistry::init('FmPointMaisu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmPointMaisu);

		parent::tearDown();
	}

}
