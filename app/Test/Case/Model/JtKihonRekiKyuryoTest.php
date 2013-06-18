<?php
App::uses('JtKihonRekiKyuryo', 'Model');

/**
 * JtKihonRekiKyuryo Test Case
 *
 */
class JtKihonRekiKyuryoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_kyuryo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiKyuryo = ClassRegistry::init('JtKihonRekiKyuryo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiKyuryo);

		parent::tearDown();
	}

}
