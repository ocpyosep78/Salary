<?php
App::uses('CzShokakuShokyu', 'Model');

/**
 * CzShokakuShokyu Test Case
 *
 */
class CzShokakuShokyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_shokaku_shokyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzShokakuShokyu = ClassRegistry::init('CzShokakuShokyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzShokakuShokyu);

		parent::tearDown();
	}

}
