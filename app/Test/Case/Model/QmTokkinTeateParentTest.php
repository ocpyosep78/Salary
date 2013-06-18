<?php
App::uses('QmTokkinTeateParent', 'Model');

/**
 * QmTokkinTeateParent Test Case
 *
 */
class QmTokkinTeateParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tokkin_teate_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTokkinTeateParent = ClassRegistry::init('QmTokkinTeateParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTokkinTeateParent);

		parent::tearDown();
	}

}
