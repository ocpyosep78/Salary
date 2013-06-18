<?php
App::uses('CtMenuChohyo', 'Model');

/**
 * CtMenuChohyo Test Case
 *
 */
class CtMenuChohyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ct_menu_chohyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CtMenuChohyo = ClassRegistry::init('CtMenuChohyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CtMenuChohyo);

		parent::tearDown();
	}

}
