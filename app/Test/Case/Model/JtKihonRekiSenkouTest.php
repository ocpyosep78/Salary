<?php
App::uses('JtKihonRekiSenkou', 'Model');

/**
 * JtKihonRekiSenkou Test Case
 *
 */
class JtKihonRekiSenkouTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_senkou'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiSenkou = ClassRegistry::init('JtKihonRekiSenkou');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiSenkou);

		parent::tearDown();
	}

}
