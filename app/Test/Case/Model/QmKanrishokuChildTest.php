<?php
App::uses('QmKanrishokuChild', 'Model');

/**
 * QmKanrishokuChild Test Case
 *
 */
class QmKanrishokuChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kanrishoku_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKanrishokuChild = ClassRegistry::init('QmKanrishokuChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKanrishokuChild);

		parent::tearDown();
	}

}
