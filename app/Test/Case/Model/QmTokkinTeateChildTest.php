<?php
App::uses('QmTokkinTeateChild', 'Model');

/**
 * QmTokkinTeateChild Test Case
 *
 */
class QmTokkinTeateChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tokkin_teate_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTokkinTeateChild = ClassRegistry::init('QmTokkinTeateChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTokkinTeateChild);

		parent::tearDown();
	}

}
