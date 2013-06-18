<?php
App::uses('QwTsuireiSagakuUchiKantoku', 'Model');

/**
 * QwTsuireiSagakuUchiKantoku Test Case
 *
 */
class QwTsuireiSagakuUchiKantokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_kantoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiKantoku = ClassRegistry::init('QwTsuireiSagakuUchiKantoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiKantoku);

		parent::tearDown();
	}

}
