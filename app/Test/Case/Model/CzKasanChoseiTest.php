<?php
App::uses('CzKasanChosei', 'Model');

/**
 * CzKasanChosei Test Case
 *
 */
class CzKasanChoseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_kasan_chosei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzKasanChosei = ClassRegistry::init('CzKasanChosei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzKasanChosei);

		parent::tearDown();
	}

}
