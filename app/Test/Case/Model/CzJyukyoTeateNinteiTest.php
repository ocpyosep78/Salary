<?php
App::uses('CzJyukyoTeateNintei', 'Model');

/**
 * CzJyukyoTeateNintei Test Case
 *
 */
class CzJyukyoTeateNinteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_jyukyo_teate_nintei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzJyukyoTeateNintei = ClassRegistry::init('CzJyukyoTeateNintei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzJyukyoTeateNintei);

		parent::tearDown();
	}

}
