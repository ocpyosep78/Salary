<?php
App::uses('JtKihonRekiKenmu', 'Model');

/**
 * JtKihonRekiKenmu Test Case
 *
 */
class JtKihonRekiKenmuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_kenmu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiKenmu = ClassRegistry::init('JtKihonRekiKenmu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiKenmu);

		parent::tearDown();
	}

}
