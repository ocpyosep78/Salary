<?php
App::uses('QmKyuryoParent', 'Model');

/**
 * QmKyuryoParent Test Case
 *
 */
class QmKyuryoParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuryo_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuryoParent = ClassRegistry::init('QmKyuryoParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuryoParent);

		parent::tearDown();
	}

}
