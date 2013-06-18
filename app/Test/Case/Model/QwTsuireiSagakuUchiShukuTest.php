<?php
App::uses('QwTsuireiSagakuUchiShuku', 'Model');

/**
 * QwTsuireiSagakuUchiShuku Test Case
 *
 */
class QwTsuireiSagakuUchiShukuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_shuku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiShuku = ClassRegistry::init('QwTsuireiSagakuUchiShuku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiShuku);

		parent::tearDown();
	}

}
