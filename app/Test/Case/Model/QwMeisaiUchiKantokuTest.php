<?php
App::uses('QwMeisaiUchiKantoku', 'Model');

/**
 * QwMeisaiUchiKantoku Test Case
 *
 */
class QwMeisaiUchiKantokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_kantoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiKantoku = ClassRegistry::init('QwMeisaiUchiKantoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiKantoku);

		parent::tearDown();
	}

}
