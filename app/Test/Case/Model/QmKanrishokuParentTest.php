<?php
App::uses('QmKanrishokuParent', 'Model');

/**
 * QmKanrishokuParent Test Case
 *
 */
class QmKanrishokuParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kanrishoku_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKanrishokuParent = ClassRegistry::init('QmKanrishokuParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKanrishokuParent);

		parent::tearDown();
	}

}
