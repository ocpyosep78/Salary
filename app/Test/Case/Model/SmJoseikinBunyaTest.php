<?php
App::uses('SmJoseikinBunya', 'Model');

/**
 * SmJoseikinBunya Test Case
 *
 */
class SmJoseikinBunyaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_joseikin_bunya'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmJoseikinBunya = ClassRegistry::init('SmJoseikinBunya');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmJoseikinBunya);

		parent::tearDown();
	}

}
