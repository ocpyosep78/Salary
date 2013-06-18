<?php
App::uses('SmBuppinMeisyo', 'Model');

/**
 * SmBuppinMeisyo Test Case
 *
 */
class SmBuppinMeisyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_buppin_meisyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmBuppinMeisyo = ClassRegistry::init('SmBuppinMeisyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmBuppinMeisyo);

		parent::tearDown();
	}

}
