<?php
App::uses('QwTsuireiSagakuHiwari', 'Model');

/**
 * QwTsuireiSagakuHiwari Test Case
 *
 */
class QwTsuireiSagakuHiwariTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_hiwari'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuHiwari = ClassRegistry::init('QwTsuireiSagakuHiwari');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuHiwari);

		parent::tearDown();
	}

}
