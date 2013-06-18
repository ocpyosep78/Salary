<?php
App::uses('FtReigetsuKojoIraiZaikeichochikuError', 'Model');

/**
 * FtReigetsuKojoIraiZaikeichochikuError Test Case
 *
 */
class FtReigetsuKojoIraiZaikeichochikuErrorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_zaikeichochiku_error'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiZaikeichochikuError = ClassRegistry::init('FtReigetsuKojoIraiZaikeichochikuError');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiZaikeichochikuError);

		parent::tearDown();
	}

}
