<?php
App::uses('JtKihonRirekiCard', 'Model');

/**
 * JtKihonRirekiCard Test Case
 *
 */
class JtKihonRirekiCardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_rireki_card'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonRirekiCard = ClassRegistry::init('JtKihonRirekiCard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonRirekiCard);

		parent::tearDown();
	}

}
