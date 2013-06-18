<?php
App::uses('QwMeisaiHiwari', 'Model');

/**
 * QwMeisaiHiwari Test Case
 *
 */
class QwMeisaiHiwariTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_hiwari'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiHiwari = ClassRegistry::init('QwMeisaiHiwari');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiHiwari);

		parent::tearDown();
	}

}
