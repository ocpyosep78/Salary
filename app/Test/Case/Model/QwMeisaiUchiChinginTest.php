<?php
App::uses('QwMeisaiUchiChingin', 'Model');

/**
 * QwMeisaiUchiChingin Test Case
 *
 */
class QwMeisaiUchiChinginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_chingin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiChingin = ClassRegistry::init('QwMeisaiUchiChingin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiChingin);

		parent::tearDown();
	}

}
