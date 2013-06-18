<?php
App::uses('CzShimeiHenkoRiyu', 'Model');

/**
 * CzShimeiHenkoRiyu Test Case
 *
 */
class CzShimeiHenkoRiyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_shimei_henko_riyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzShimeiHenkoRiyu = ClassRegistry::init('CzShimeiHenkoRiyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzShimeiHenkoRiyu);

		parent::tearDown();
	}

}
