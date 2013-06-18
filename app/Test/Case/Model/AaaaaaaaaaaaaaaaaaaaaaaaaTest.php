<?php
App::uses('Aaaaaaaaaaaaaaaaaaaaaaaaa', 'Model');

/**
 * Aaaaaaaaaaaaaaaaaaaaaaaaa Test Case
 *
 */
class AaaaaaaaaaaaaaaaaaaaaaaaaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aaaaaaaaaaaaaaaaaaaaaaaaa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aaaaaaaaaaaaaaaaaaaaaaaaa = ClassRegistry::init('Aaaaaaaaaaaaaaaaaaaaaaaaa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aaaaaaaaaaaaaaaaaaaaaaaaa);

		parent::tearDown();
	}

}
