<?php
App::uses('CzMenuChohyo', 'Model');

/**
 * CzMenuChohyo Test Case
 *
 */
class CzMenuChohyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_menu_chohyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzMenuChohyo = ClassRegistry::init('CzMenuChohyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzMenuChohyo);

		parent::tearDown();
	}

}
