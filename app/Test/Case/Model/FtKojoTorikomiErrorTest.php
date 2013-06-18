<?php
App::uses('FtKojoTorikomiError', 'Model');

/**
 * FtKojoTorikomiError Test Case
 *
 */
class FtKojoTorikomiErrorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_kojo_torikomi_error'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtKojoTorikomiError = ClassRegistry::init('FtKojoTorikomiError');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtKojoTorikomiError);

		parent::tearDown();
	}

}
