<?php
App::uses('JvKihonRekiSyokaku', 'Model');

/**
 * JvKihonRekiSyokaku Test Case
 *
 */
class JvKihonRekiSyokakuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jv_kihon_reki_syokaku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JvKihonRekiSyokaku = ClassRegistry::init('JvKihonRekiSyokaku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JvKihonRekiSyokaku);

		parent::tearDown();
	}

}
