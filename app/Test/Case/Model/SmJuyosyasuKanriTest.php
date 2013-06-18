<?php
App::uses('SmJuyosyasuKanri', 'Model');

/**
 * SmJuyosyasuKanri Test Case
 *
 */
class SmJuyosyasuKanriTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_juyosyasu_kanri'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmJuyosyasuKanri = ClassRegistry::init('SmJuyosyasuKanri');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmJuyosyasuKanri);

		parent::tearDown();
	}

}
