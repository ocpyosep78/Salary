<?php
App::uses('CzSenko', 'Model');

/**
 * CzSenko Test Case
 *
 */
class CzSenkoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_senko'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzSenko = ClassRegistry::init('CzSenko');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzSenko);

		parent::tearDown();
	}

}
