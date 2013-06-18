<?php
App::uses('JwKihonRekiHaken', 'Model');

/**
 * JwKihonRekiHaken Test Case
 *
 */
class JwKihonRekiHakenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jw_kihon_reki_haken'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JwKihonRekiHaken = ClassRegistry::init('JwKihonRekiHaken');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JwKihonRekiHaken);

		parent::tearDown();
	}

}
