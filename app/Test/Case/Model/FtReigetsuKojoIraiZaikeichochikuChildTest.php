<?php
App::uses('FtReigetsuKojoIraiZaikeichochikuChild', 'Model');

/**
 * FtReigetsuKojoIraiZaikeichochikuChild Test Case
 *
 */
class FtReigetsuKojoIraiZaikeichochikuChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_zaikeichochiku_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiZaikeichochikuChild = ClassRegistry::init('FtReigetsuKojoIraiZaikeichochikuChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiZaikeichochikuChild);

		parent::tearDown();
	}

}
