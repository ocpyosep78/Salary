<?php
App::uses('QwTsuireiSagakuUchiChingin', 'Model');

/**
 * QwTsuireiSagakuUchiChingin Test Case
 *
 */
class QwTsuireiSagakuUchiChinginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_chingin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiChingin = ClassRegistry::init('QwTsuireiSagakuUchiChingin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiChingin);

		parent::tearDown();
	}

}
