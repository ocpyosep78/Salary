<?php
App::uses('FtReigetsuKojoIraiGojoKakushuError', 'Model');

/**
 * FtReigetsuKojoIraiGojoKakushuError Test Case
 *
 */
class FtReigetsuKojoIraiGojoKakushuErrorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_gojo_kakushu_error'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiGojoKakushuError = ClassRegistry::init('FtReigetsuKojoIraiGojoKakushuError');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiGojoKakushuError);

		parent::tearDown();
	}

}
