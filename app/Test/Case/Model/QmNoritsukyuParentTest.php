<?php
App::uses('QmNoritsukyuParent', 'Model');

/**
 * QmNoritsukyuParent Test Case
 *
 */
class QmNoritsukyuParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_noritsukyu_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmNoritsukyuParent = ClassRegistry::init('QmNoritsukyuParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmNoritsukyuParent);

		parent::tearDown();
	}

}
