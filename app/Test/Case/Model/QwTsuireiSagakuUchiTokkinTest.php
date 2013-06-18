<?php
App::uses('QwTsuireiSagakuUchiTokkin', 'Model');

/**
 * QwTsuireiSagakuUchiTokkin Test Case
 *
 */
class QwTsuireiSagakuUchiTokkinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_tokkin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiTokkin = ClassRegistry::init('QwTsuireiSagakuUchiTokkin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiTokkin);

		parent::tearDown();
	}

}
