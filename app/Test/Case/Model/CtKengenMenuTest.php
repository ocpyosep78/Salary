<?php
App::uses('CtKengenMenu', 'Model');

/**
 * CtKengenMenu Test Case
 *
 */
class CtKengenMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ct_kengen_menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CtKengenMenu = ClassRegistry::init('CtKengenMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CtKengenMenu);

		parent::tearDown();
	}

}
