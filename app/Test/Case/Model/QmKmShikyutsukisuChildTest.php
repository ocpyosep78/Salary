<?php
App::uses('QmKmShikyutsukisuChild', 'Model');

/**
 * QmKmShikyutsukisuChild Test Case
 *
 */
class QmKmShikyutsukisuChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_shikyutsukisu_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmShikyutsukisuChild = ClassRegistry::init('QmKmShikyutsukisuChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmShikyutsukisuChild);

		parent::tearDown();
	}

}
