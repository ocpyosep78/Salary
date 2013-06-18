<?php
App::uses('JtKihonRekiKmkiroku', 'Model');

/**
 * JtKihonRekiKmkiroku Test Case
 *
 */
class JtKihonRekiKmkirokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_kmkiroku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiKmkiroku = ClassRegistry::init('JtKihonRekiKmkiroku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiKmkiroku);

		parent::tearDown();
	}

}
