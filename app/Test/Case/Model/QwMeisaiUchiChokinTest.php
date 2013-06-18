<?php
App::uses('QwMeisaiUchiChokin', 'Model');

/**
 * QwMeisaiUchiChokin Test Case
 *
 */
class QwMeisaiUchiChokinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_chokin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiChokin = ClassRegistry::init('QwMeisaiUchiChokin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiChokin);

		parent::tearDown();
	}

}
