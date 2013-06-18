<?php
App::uses('FmTaikaiKinenhinryo', 'Model');

/**
 * FmTaikaiKinenhinryo Test Case
 *
 */
class FmTaikaiKinenhinryoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_taikai_kinenhinryo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmTaikaiKinenhinryo = ClassRegistry::init('FmTaikaiKinenhinryo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmTaikaiKinenhinryo);

		parent::tearDown();
	}

}
