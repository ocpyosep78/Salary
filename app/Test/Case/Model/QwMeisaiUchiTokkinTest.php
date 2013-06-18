<?php
App::uses('QwMeisaiUchiTokkin', 'Model');

/**
 * QwMeisaiUchiTokkin Test Case
 *
 */
class QwMeisaiUchiTokkinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_tokkin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiTokkin = ClassRegistry::init('QwMeisaiUchiTokkin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiTokkin);

		parent::tearDown();
	}

}
