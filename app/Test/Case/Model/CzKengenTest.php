<?php
App::uses('CzKengen', 'Model');

/**
 * CzKengen Test Case
 *
 */
class CzKengenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_kengen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzKengen = ClassRegistry::init('CzKengen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzKengen);

		parent::tearDown();
	}

}
