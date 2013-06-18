<?php
App::uses('FtReigetsuKojoIraiToshokushinError', 'Model');

/**
 * FtReigetsuKojoIraiToshokushinError Test Case
 *
 */
class FtReigetsuKojoIraiToshokushinErrorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_toshokushin_error'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiToshokushinError = ClassRegistry::init('FtReigetsuKojoIraiToshokushinError');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiToshokushinError);

		parent::tearDown();
	}

}
