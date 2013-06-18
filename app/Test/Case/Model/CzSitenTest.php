<?php
App::uses('CzSiten', 'Model');

/**
 * CzSiten Test Case
 *
 */
class CzSitenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_siten'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzSiten = ClassRegistry::init('CzSiten');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzSiten);

		parent::tearDown();
	}

}
