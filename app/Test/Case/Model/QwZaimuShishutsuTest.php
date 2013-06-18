<?php
App::uses('QwZaimuShishutsu', 'Model');

/**
 * QwZaimuShishutsu Test Case
 *
 */
class QwZaimuShishutsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_zaimu_shishutsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwZaimuShishutsu = ClassRegistry::init('QwZaimuShishutsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwZaimuShishutsu);

		parent::tearDown();
	}

}
