<?php
App::uses('FmCafeKenko', 'Model');

/**
 * FmCafeKenko Test Case
 *
 */
class FmCafeKenkoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_cafe_kenko'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmCafeKenko = ClassRegistry::init('FmCafeKenko');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmCafeKenko);

		parent::tearDown();
	}

}
