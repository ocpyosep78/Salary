<?php
App::uses('QmKmShokumukyuKasanParent', 'Model');

/**
 * QmKmShokumukyuKasanParent Test Case
 *
 */
class QmKmShokumukyuKasanParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_shokumukyu_kasan_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmShokumukyuKasanParent = ClassRegistry::init('QmKmShokumukyuKasanParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmShokumukyuKasanParent);

		parent::tearDown();
	}

}
