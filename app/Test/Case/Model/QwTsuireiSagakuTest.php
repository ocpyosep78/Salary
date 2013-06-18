<?php
App::uses('QwTsuireiSagaku', 'Model');

/**
 * QwTsuireiSagaku Test Case
 *
 */
class QwTsuireiSagakuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagaku = ClassRegistry::init('QwTsuireiSagaku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagaku);

		parent::tearDown();
	}

}
