<?php
App::uses('FtReigetsuKojoIraiZaikeichochikuParent', 'Model');

/**
 * FtReigetsuKojoIraiZaikeichochikuParent Test Case
 *
 */
class FtReigetsuKojoIraiZaikeichochikuParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_zaikeichochiku_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiZaikeichochikuParent = ClassRegistry::init('FtReigetsuKojoIraiZaikeichochikuParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiZaikeichochikuParent);

		parent::tearDown();
	}

}
