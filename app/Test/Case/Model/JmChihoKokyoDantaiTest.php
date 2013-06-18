<?php
App::uses('JmChihoKokyoDantai', 'Model');

/**
 * JmChihoKokyoDantai Test Case
 *
 */
class JmChihoKokyoDantaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_chiho_kokyo_dantai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmChihoKokyoDantai = ClassRegistry::init('JmChihoKokyoDantai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmChihoKokyoDantai);

		parent::tearDown();
	}

}
