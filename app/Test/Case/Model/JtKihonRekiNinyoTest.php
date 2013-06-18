<?php
App::uses('JtKihonRekiNinyo', 'Model');

/**
 * JtKihonRekiNinyo Test Case
 *
 */
class JtKihonRekiNinyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_ninyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiNinyo = ClassRegistry::init('JtKihonRekiNinyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiNinyo);

		parent::tearDown();
	}

}
