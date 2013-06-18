<?php
App::uses('QmJidoTeateSyometu', 'Model');

/**
 * QmJidoTeateSyometu Test Case
 *
 */
class QmJidoTeateSyometuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_jido_teate_syometu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmJidoTeateSyometu = ClassRegistry::init('QmJidoTeateSyometu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmJidoTeateSyometu);

		parent::tearDown();
	}

}
