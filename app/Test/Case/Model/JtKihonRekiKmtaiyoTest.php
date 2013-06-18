<?php
App::uses('JtKihonRekiKmtaiyo', 'Model');

/**
 * JtKihonRekiKmtaiyo Test Case
 *
 */
class JtKihonRekiKmtaiyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_kmtaiyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiKmtaiyo = ClassRegistry::init('JtKihonRekiKmtaiyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiKmtaiyo);

		parent::tearDown();
	}

}
