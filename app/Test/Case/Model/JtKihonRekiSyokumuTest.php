<?php
App::uses('JtKihonRekiSyokumu', 'Model');

/**
 * JtKihonRekiSyokumu Test Case
 *
 */
class JtKihonRekiSyokumuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_syokumu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiSyokumu = ClassRegistry::init('JtKihonRekiSyokumu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiSyokumu);

		parent::tearDown();
	}

}
