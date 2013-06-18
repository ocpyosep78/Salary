<?php
App::uses('JtKihonRekiZenreki', 'Model');

/**
 * JtKihonRekiZenreki Test Case
 *
 */
class JtKihonRekiZenrekiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_zenreki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiZenreki = ClassRegistry::init('JtKihonRekiZenreki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiZenreki);

		parent::tearDown();
	}

}
