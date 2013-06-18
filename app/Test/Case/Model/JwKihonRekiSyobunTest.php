<?php
App::uses('JwKihonRekiSyobun', 'Model');

/**
 * JwKihonRekiSyobun Test Case
 *
 */
class JwKihonRekiSyobunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jw_kihon_reki_syobun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JwKihonRekiSyobun = ClassRegistry::init('JwKihonRekiSyobun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JwKihonRekiSyobun);

		parent::tearDown();
	}

}
