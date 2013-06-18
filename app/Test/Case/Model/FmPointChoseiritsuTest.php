<?php
App::uses('FmPointChoseiritsu', 'Model');

/**
 * FmPointChoseiritsu Test Case
 *
 */
class FmPointChoseiritsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_point_choseiritsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmPointChoseiritsu = ClassRegistry::init('FmPointChoseiritsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmPointChoseiritsu);

		parent::tearDown();
	}

}
