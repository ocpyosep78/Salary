<?php
App::uses('JvKihonRekiKyuryo', 'Model');

/**
 * JvKihonRekiKyuryo Test Case
 *
 */
class JvKihonRekiKyuryoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jv_kihon_reki_kyuryo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JvKihonRekiKyuryo = ClassRegistry::init('JvKihonRekiKyuryo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JvKihonRekiKyuryo);

		parent::tearDown();
	}

}
