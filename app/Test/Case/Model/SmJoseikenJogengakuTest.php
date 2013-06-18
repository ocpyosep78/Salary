<?php
App::uses('SmJoseikenJogengaku', 'Model');

/**
 * SmJoseikenJogengaku Test Case
 *
 */
class SmJoseikenJogengakuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_joseiken_jogengaku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmJoseikenJogengaku = ClassRegistry::init('SmJoseikenJogengaku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmJoseikenJogengaku);

		parent::tearDown();
	}

}
