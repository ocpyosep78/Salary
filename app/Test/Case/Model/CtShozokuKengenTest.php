<?php
App::uses('CtShozokuKengen', 'Model');

/**
 * CtShozokuKengen Test Case
 *
 */
class CtShozokuKengenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ct_shozoku_kengen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CtShozokuKengen = ClassRegistry::init('CtShozokuKengen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CtShozokuKengen);

		parent::tearDown();
	}

}
