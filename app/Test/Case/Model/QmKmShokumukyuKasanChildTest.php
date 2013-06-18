<?php
App::uses('QmKmShokumukyuKasanChild', 'Model');

/**
 * QmKmShokumukyuKasanChild Test Case
 *
 */
class QmKmShokumukyuKasanChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_shokumukyu_kasan_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmShokumukyuKasanChild = ClassRegistry::init('QmKmShokumukyuKasanChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmShokumukyuKasanChild);

		parent::tearDown();
	}

}
