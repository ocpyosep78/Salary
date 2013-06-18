<?php
App::uses('SmAnketoKekkaMeisai', 'Model');

/**
 * SmAnketoKekkaMeisai Test Case
 *
 */
class SmAnketoKekkaMeisaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_anketo_kekka_meisai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmAnketoKekkaMeisai = ClassRegistry::init('SmAnketoKekkaMeisai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmAnketoKekkaMeisai);

		parent::tearDown();
	}

}
