<?php
App::uses('CzZenrekiSiyoGyomu', 'Model');

/**
 * CzZenrekiSiyoGyomu Test Case
 *
 */
class CzZenrekiSiyoGyomuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_zenreki_siyo_gyomu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzZenrekiSiyoGyomu = ClassRegistry::init('CzZenrekiSiyoGyomu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzZenrekiSiyoGyomu);

		parent::tearDown();
	}

}
