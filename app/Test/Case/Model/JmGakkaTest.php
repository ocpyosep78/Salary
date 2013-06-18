<?php
App::uses('JmGakka', 'Model');

/**
 * JmGakka Test Case
 *
 */
class JmGakkaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_gakka'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmGakka = ClassRegistry::init('JmGakka');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmGakka);

		parent::tearDown();
	}

}
