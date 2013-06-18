<?php
App::uses('JmShogaiTeido', 'Model');

/**
 * JmShogaiTeido Test Case
 *
 */
class JmShogaiTeidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_shogai_teido'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmShogaiTeido = ClassRegistry::init('JmShogaiTeido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmShogaiTeido);

		parent::tearDown();
	}

}
