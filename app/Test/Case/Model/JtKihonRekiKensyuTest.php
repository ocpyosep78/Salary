<?php
App::uses('JtKihonRekiKensyu', 'Model');

/**
 * JtKihonRekiKensyu Test Case
 *
 */
class JtKihonRekiKensyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_kensyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiKensyu = ClassRegistry::init('JtKihonRekiKensyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiKensyu);

		parent::tearDown();
	}

}
