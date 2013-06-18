<?php
App::uses('CzSyogaiSyubetu', 'Model');

/**
 * CzSyogaiSyubetu Test Case
 *
 */
class CzSyogaiSyubetuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_syogai_syubetu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzSyogaiSyubetu = ClassRegistry::init('CzSyogaiSyubetu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzSyogaiSyubetu);

		parent::tearDown();
	}

}
