<?php
App::uses('FtReigetsuKojoIraiAdachiRokin', 'Model');

/**
 * FtReigetsuKojoIraiAdachiRokin Test Case
 *
 */
class FtReigetsuKojoIraiAdachiRokinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_adachi_rokin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiAdachiRokin = ClassRegistry::init('FtReigetsuKojoIraiAdachiRokin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiAdachiRokin);

		parent::tearDown();
	}

}
