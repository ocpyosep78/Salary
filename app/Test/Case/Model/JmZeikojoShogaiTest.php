<?php
App::uses('JmZeikojoShogai', 'Model');

/**
 * JmZeikojoShogai Test Case
 *
 */
class JmZeikojoShogaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_zeikojo_shogai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmZeikojoShogai = ClassRegistry::init('JmZeikojoShogai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmZeikojoShogai);

		parent::tearDown();
	}

}
