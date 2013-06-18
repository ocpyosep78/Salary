<?php
App::uses('JtKihonRekiSyozoku', 'Model');

/**
 * JtKihonRekiSyozoku Test Case
 *
 */
class JtKihonRekiSyozokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_syozoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiSyozoku = ClassRegistry::init('JtKihonRekiSyozoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiSyozoku);

		parent::tearDown();
	}

}
