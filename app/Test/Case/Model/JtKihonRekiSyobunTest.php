<?php
App::uses('JtKihonRekiSyobun', 'Model');

/**
 * JtKihonRekiSyobun Test Case
 *
 */
class JtKihonRekiSyobunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_syobun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiSyobun = ClassRegistry::init('JtKihonRekiSyobun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiSyobun);

		parent::tearDown();
	}

}
