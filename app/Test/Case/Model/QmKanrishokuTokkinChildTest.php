<?php
App::uses('QmKanrishokuTokkinChild', 'Model');

/**
 * QmKanrishokuTokkinChild Test Case
 *
 */
class QmKanrishokuTokkinChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kanrishoku_tokkin_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKanrishokuTokkinChild = ClassRegistry::init('QmKanrishokuTokkinChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKanrishokuTokkinChild);

		parent::tearDown();
	}

}
