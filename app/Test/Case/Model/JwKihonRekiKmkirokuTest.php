<?php
App::uses('JwKihonRekiKmkiroku', 'Model');

/**
 * JwKihonRekiKmkiroku Test Case
 *
 */
class JwKihonRekiKmkirokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jw_kihon_reki_kmkiroku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JwKihonRekiKmkiroku = ClassRegistry::init('JwKihonRekiKmkiroku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JwKihonRekiKmkiroku);

		parent::tearDown();
	}

}
