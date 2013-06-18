<?php
App::uses('JtKihonRekiHeinin', 'Model');

/**
 * JtKihonRekiHeinin Test Case
 *
 */
class JtKihonRekiHeininTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_heinin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiHeinin = ClassRegistry::init('JtKihonRekiHeinin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiHeinin);

		parent::tearDown();
	}

}
