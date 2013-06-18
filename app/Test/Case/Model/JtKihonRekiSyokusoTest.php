<?php
App::uses('JtKihonRekiSyokuso', 'Model');

/**
 * JtKihonRekiSyokuso Test Case
 *
 */
class JtKihonRekiSyokusoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_reki_syokuso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRekiSyokuso = ClassRegistry::init('JtKihonRekiSyokuso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRekiSyokuso);

		parent::tearDown();
	}

}
