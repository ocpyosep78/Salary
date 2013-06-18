<?php
App::uses('CzSikyuSyubetu', 'Model');

/**
 * CzSikyuSyubetu Test Case
 *
 */
class CzSikyuSyubetuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_sikyu_syubetu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzSikyuSyubetu = ClassRegistry::init('CzSikyuSyubetu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzSikyuSyubetu);

		parent::tearDown();
	}

}
