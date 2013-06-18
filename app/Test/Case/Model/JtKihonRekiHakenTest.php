<?php
App::uses('JtKihonRekiHaken', 'Model');

/**
 * JtKihonRekiHaken Test Case
 *
 */
class JtKihonRekiHakenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_haken'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiHaken = ClassRegistry::init('JtKihonRekiHaken');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiHaken);

		parent::tearDown();
	}

}
