<?php
App::uses('CzDantaiSyubetu', 'Model');

/**
 * CzDantaiSyubetu Test Case
 *
 */
class CzDantaiSyubetuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_dantai_syubetu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzDantaiSyubetu = ClassRegistry::init('CzDantaiSyubetu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzDantaiSyubetu);

		parent::tearDown();
	}

}
