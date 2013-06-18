<?php
App::uses('QmKanrishokuTokkinParent', 'Model');

/**
 * QmKanrishokuTokkinParent Test Case
 *
 */
class QmKanrishokuTokkinParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kanrishoku_tokkin_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKanrishokuTokkinParent = ClassRegistry::init('QmKanrishokuTokkinParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKanrishokuTokkinParent);

		parent::tearDown();
	}

}
