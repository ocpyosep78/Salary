<?php
App::uses('QwTsuireiKekka', 'Model');

/**
 * QwTsuireiKekka Test Case
 *
 */
class QwTsuireiKekkaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_kekka'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiKekka = ClassRegistry::init('QwTsuireiKekka');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiKekka);

		parent::tearDown();
	}

}
