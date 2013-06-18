<?php
App::uses('CzKintaiKanriHyo', 'Model');

/**
 * CzKintaiKanriHyo Test Case
 *
 */
class CzKintaiKanriHyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_kintai_kanri_hyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzKintaiKanriHyo = ClassRegistry::init('CzKintaiKanriHyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzKintaiKanriHyo);

		parent::tearDown();
	}

}
