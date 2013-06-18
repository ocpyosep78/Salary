<?php
App::uses('QmKaihiChild', 'Model');

/**
 * QmKaihiChild Test Case
 *
 */
class QmKaihiChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kaihi_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKaihiChild = ClassRegistry::init('QmKaihiChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKaihiChild);

		parent::tearDown();
	}

}
