<?php
App::uses('JtKihonRekiHyosyo', 'Model');

/**
 * JtKihonRekiHyosyo Test Case
 *
 */
class JtKihonRekiHyosyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_hyosyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiHyosyo = ClassRegistry::init('JtKihonRekiHyosyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiHyosyo);

		parent::tearDown();
	}

}
