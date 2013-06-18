<?php
App::uses('FtReigetsuKojoIraiGojoSeihoHaitoParent', 'Model');

/**
 * FtReigetsuKojoIraiGojoSeihoHaitoParent Test Case
 *
 */
class FtReigetsuKojoIraiGojoSeihoHaitoParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_gojo_seiho_haito_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiGojoSeihoHaitoParent = ClassRegistry::init('FtReigetsuKojoIraiGojoSeihoHaitoParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiGojoSeihoHaitoParent);

		parent::tearDown();
	}

}
