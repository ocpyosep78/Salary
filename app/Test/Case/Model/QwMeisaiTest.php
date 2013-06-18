<?php
App::uses('QwMeisai', 'Model');

/**
 * QwMeisai Test Case
 *
 */
class QwMeisaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisai = ClassRegistry::init('QwMeisai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisai);

		parent::tearDown();
	}

}
