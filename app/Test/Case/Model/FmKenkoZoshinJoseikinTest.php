<?php
App::uses('FmKenkoZoshinJoseikin', 'Model');

/**
 * FmKenkoZoshinJoseikin Test Case
 *
 */
class FmKenkoZoshinJoseikinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_kenko_zoshin_joseikin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmKenkoZoshinJoseikin = ClassRegistry::init('FmKenkoZoshinJoseikin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmKenkoZoshinJoseikin);

		parent::tearDown();
	}

}
