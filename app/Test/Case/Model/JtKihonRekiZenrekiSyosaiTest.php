<?php
App::uses('JtKihonRekiZenrekiSyosai', 'Model');

/**
 * JtKihonRekiZenrekiSyosai Test Case
 *
 */
class JtKihonRekiZenrekiSyosaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_zenreki_syosai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiZenrekiSyosai = ClassRegistry::init('JtKihonRekiZenrekiSyosai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiZenrekiSyosai);

		parent::tearDown();
	}

}
