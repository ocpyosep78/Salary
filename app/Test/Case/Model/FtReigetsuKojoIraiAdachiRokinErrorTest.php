<?php
App::uses('FtReigetsuKojoIraiAdachiRokinError', 'Model');

/**
 * FtReigetsuKojoIraiAdachiRokinError Test Case
 *
 */
class FtReigetsuKojoIraiAdachiRokinErrorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_adachi_rokin_error'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiAdachiRokinError = ClassRegistry::init('FtReigetsuKojoIraiAdachiRokinError');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiAdachiRokinError);

		parent::tearDown();
	}

}
