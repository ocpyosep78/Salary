<?php
App::uses('CzSaiyoGakureki', 'Model');

/**
 * CzSaiyoGakureki Test Case
 *
 */
class CzSaiyoGakurekiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_saiyo_gakureki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzSaiyoGakureki = ClassRegistry::init('CzSaiyoGakureki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzSaiyoGakureki);

		parent::tearDown();
	}

}
