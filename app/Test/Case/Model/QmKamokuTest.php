<?php
App::uses('QmKamoku', 'Model');

/**
 * QmKamoku Test Case
 *
 */
class QmKamokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kamoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKamoku = ClassRegistry::init('QmKamoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKamoku);

		parent::tearDown();
	}

}
