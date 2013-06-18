<?php
App::uses('JtQskihonrWork', 'Model');

/**
 * JtQskihonrWork Test Case
 *
 */
class JtQskihonrWorkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_qskihonr_work'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtQskihonrWork = ClassRegistry::init('JtQskihonrWork');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtQskihonrWork);

		parent::tearDown();
	}

}
