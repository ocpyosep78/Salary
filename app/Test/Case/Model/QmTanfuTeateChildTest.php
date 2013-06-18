<?php
App::uses('QmTanfuTeateChild', 'Model');

/**
 * QmTanfuTeateChild Test Case
 *
 */
class QmTanfuTeateChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tanfu_teate_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTanfuTeateChild = ClassRegistry::init('QmTanfuTeateChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTanfuTeateChild);

		parent::tearDown();
	}

}
