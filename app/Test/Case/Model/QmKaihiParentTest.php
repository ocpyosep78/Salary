<?php
App::uses('QmKaihiParent', 'Model');

/**
 * QmKaihiParent Test Case
 *
 */
class QmKaihiParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kaihi_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKaihiParent = ClassRegistry::init('QmKaihiParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKaihiParent);

		parent::tearDown();
	}

}
