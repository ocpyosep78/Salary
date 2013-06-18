<?php
App::uses('JtKihonRekiTaisyoku', 'Model');

/**
 * JtKihonRekiTaisyoku Test Case
 *
 */
class JtKihonRekiTaisyokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_taisyoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiTaisyoku = ClassRegistry::init('JtKihonRekiTaisyoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiTaisyoku);

		parent::tearDown();
	}

}
