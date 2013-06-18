<?php
App::uses('FmShokuinryoHeya', 'Model');

/**
 * FmShokuinryoHeya Test Case
 *
 */
class FmShokuinryoHeyaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_shokuinryo_heya'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmShokuinryoHeya = ClassRegistry::init('FmShokuinryoHeya');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmShokuinryoHeya);

		parent::tearDown();
	}

}
