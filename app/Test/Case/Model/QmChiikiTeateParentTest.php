<?php
App::uses('QmChiikiTeateParent', 'Model');

/**
 * QmChiikiTeateParent Test Case
 *
 */
class QmChiikiTeateParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_chiiki_teate_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmChiikiTeateParent = ClassRegistry::init('QmChiikiTeateParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmChiikiTeateParent);

		parent::tearDown();
	}

}
