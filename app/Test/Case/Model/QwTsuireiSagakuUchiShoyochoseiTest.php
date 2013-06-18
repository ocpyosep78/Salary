<?php
App::uses('QwTsuireiSagakuUchiShoyochosei', 'Model');

/**
 * QwTsuireiSagakuUchiShoyochosei Test Case
 *
 */
class QwTsuireiSagakuUchiShoyochoseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_shoyochosei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiShoyochosei = ClassRegistry::init('QwTsuireiSagakuUchiShoyochosei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiShoyochosei);

		parent::tearDown();
	}

}
