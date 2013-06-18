<?php
App::uses('FmShokuinryo', 'Model');

/**
 * FmShokuinryo Test Case
 *
 */
class FmShokuinryoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_shokuinryo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmShokuinryo = ClassRegistry::init('FmShokuinryo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmShokuinryo);

		parent::tearDown();
	}

}
