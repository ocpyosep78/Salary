<?php
App::uses('CzRinsyokuKoyoRiyu', 'Model');

/**
 * CzRinsyokuKoyoRiyu Test Case
 *
 */
class CzRinsyokuKoyoRiyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_rinsyoku_koyo_riyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzRinsyokuKoyoRiyu = ClassRegistry::init('CzRinsyokuKoyoRiyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzRinsyokuKoyoRiyu);

		parent::tearDown();
	}

}
