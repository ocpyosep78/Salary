<?php
App::uses('QwTsuireiSagakuUchiChokin', 'Model');

/**
 * QwTsuireiSagakuUchiChokin Test Case
 *
 */
class QwTsuireiSagakuUchiChokinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_chokin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiChokin = ClassRegistry::init('QwTsuireiSagakuUchiChokin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiChokin);

		parent::tearDown();
	}

}
