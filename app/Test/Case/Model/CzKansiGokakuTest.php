<?php
App::uses('CzKansiGokaku', 'Model');

/**
 * CzKansiGokaku Test Case
 *
 */
class CzKansiGokakuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_kansi_gokaku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzKansiGokaku = ClassRegistry::init('CzKansiGokaku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzKansiGokaku);

		parent::tearDown();
	}

}
