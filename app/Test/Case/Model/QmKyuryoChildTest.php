<?php
App::uses('QmKyuryoChild', 'Model');

/**
 * QmKyuryoChild Test Case
 *
 */
class QmKyuryoChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kyuryo_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKyuryoChild = ClassRegistry::init('QmKyuryoChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKyuryoChild);

		parent::tearDown();
	}

}
