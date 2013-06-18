<?php
App::uses('CzHakensaki', 'Model');

/**
 * CzHakensaki Test Case
 *
 */
class CzHakensakiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_hakensaki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzHakensaki = ClassRegistry::init('CzHakensaki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzHakensaki);

		parent::tearDown();
	}

}
