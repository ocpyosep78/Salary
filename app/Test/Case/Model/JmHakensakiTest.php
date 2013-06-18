<?php
App::uses('JmHakensaki', 'Model');

/**
 * JmHakensaki Test Case
 *
 */
class JmHakensakiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_hakensaki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmHakensaki = ClassRegistry::init('JmHakensaki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmHakensaki);

		parent::tearDown();
	}

}
