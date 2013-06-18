<?php
App::uses('JmKintaiSeigyo', 'Model');

/**
 * JmKintaiSeigyo Test Case
 *
 */
class JmKintaiSeigyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_kintai_seigyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmKintaiSeigyo = ClassRegistry::init('JmKintaiSeigyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmKintaiSeigyo);

		parent::tearDown();
	}

}
