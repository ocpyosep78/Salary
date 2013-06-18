<?php
App::uses('QmKmTeateGengakuChokai', 'Model');

/**
 * QmKmTeateGengakuChokai Test Case
 *
 */
class QmKmTeateGengakuChokaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_teate_gengaku_chokai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmTeateGengakuChokai = ClassRegistry::init('QmKmTeateGengakuChokai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmTeateGengakuChokai);

		parent::tearDown();
	}

}
