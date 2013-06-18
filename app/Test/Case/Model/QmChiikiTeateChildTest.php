<?php
App::uses('QmChiikiTeateChild', 'Model');

/**
 * QmChiikiTeateChild Test Case
 *
 */
class QmChiikiTeateChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_chiiki_teate_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmChiikiTeateChild = ClassRegistry::init('QmChiikiTeateChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmChiikiTeateChild);

		parent::tearDown();
	}

}
