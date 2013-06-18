<?php
App::uses('SmBuppinSyosai', 'Model');

/**
 * SmBuppinSyosai Test Case
 *
 */
class SmBuppinSyosaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_buppin_syosai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmBuppinSyosai = ClassRegistry::init('SmBuppinSyosai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmBuppinSyosai);

		parent::tearDown();
	}

}
