<?php
App::uses('SmAnketoKekkaHeader', 'Model');

/**
 * SmAnketoKekkaHeader Test Case
 *
 */
class SmAnketoKekkaHeaderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_anketo_kekka_header'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmAnketoKekkaHeader = ClassRegistry::init('SmAnketoKekkaHeader');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmAnketoKekkaHeader);

		parent::tearDown();
	}

}
