<?php
App::uses('CzRinjiYosan', 'Model');

/**
 * CzRinjiYosan Test Case
 *
 */
class CzRinjiYosanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_rinji_yosan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzRinjiYosan = ClassRegistry::init('CzRinjiYosan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzRinjiYosan);

		parent::tearDown();
	}

}
