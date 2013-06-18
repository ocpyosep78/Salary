<?php
App::uses('CzGetugakuNichigakuJikyu', 'Model');

/**
 * CzGetugakuNichigakuJikyu Test Case
 *
 */
class CzGetugakuNichigakuJikyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_getugaku_nichigaku_jikyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzGetugakuNichigakuJikyu = ClassRegistry::init('CzGetugakuNichigakuJikyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzGetugakuNichigakuJikyu);

		parent::tearDown();
	}

}
