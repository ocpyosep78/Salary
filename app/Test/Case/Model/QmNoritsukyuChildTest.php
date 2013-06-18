<?php
App::uses('QmNoritsukyuChild', 'Model');

/**
 * QmNoritsukyuChild Test Case
 *
 */
class QmNoritsukyuChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_noritsukyu_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmNoritsukyuChild = ClassRegistry::init('QmNoritsukyuChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmNoritsukyuChild);

		parent::tearDown();
	}

}
