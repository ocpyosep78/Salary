<?php
App::uses('CtUserKengen', 'Model');

/**
 * CtUserKengen Test Case
 *
 */
class CtUserKengenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ct_user_kengen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CtUserKengen = ClassRegistry::init('CtUserKengen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CtUserKengen);

		parent::tearDown();
	}

}
