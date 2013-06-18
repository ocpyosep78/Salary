<?php
App::uses('FtReigetsuKojoIraiKyosaiKashitsukeError', 'Model');

/**
 * FtReigetsuKojoIraiKyosaiKashitsukeError Test Case
 *
 */
class FtReigetsuKojoIraiKyosaiKashitsukeErrorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_kyosai_kashitsuke_error'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiKyosaiKashitsukeError = ClassRegistry::init('FtReigetsuKojoIraiKyosaiKashitsukeError');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiKyosaiKashitsukeError);

		parent::tearDown();
	}

}
