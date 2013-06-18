<?php
App::uses('SmJokenKeyKanri', 'Model');

/**
 * SmJokenKeyKanri Test Case
 *
 */
class SmJokenKeyKanriTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_joken_key_kanri'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmJokenKeyKanri = ClassRegistry::init('SmJokenKeyKanri');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmJokenKeyKanri);

		parent::tearDown();
	}

}
