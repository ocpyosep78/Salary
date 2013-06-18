<?php
App::uses('QmKmShikyutsukisuParent', 'Model');

/**
 * QmKmShikyutsukisuParent Test Case
 *
 */
class QmKmShikyutsukisuParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_shikyutsukisu_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmShikyutsukisuParent = ClassRegistry::init('QmKmShikyutsukisuParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmShikyutsukisuParent);

		parent::tearDown();
	}

}
