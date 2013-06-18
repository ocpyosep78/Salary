<?php
App::uses('QmJidoTeateSikyu', 'Model');

/**
 * QmJidoTeateSikyu Test Case
 *
 */
class QmJidoTeateSikyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_jido_teate_sikyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmJidoTeateSikyu = ClassRegistry::init('QmJidoTeateSikyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmJidoTeateSikyu);

		parent::tearDown();
	}

}
