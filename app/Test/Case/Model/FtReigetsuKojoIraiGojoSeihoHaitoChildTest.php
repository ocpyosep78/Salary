<?php
App::uses('FtReigetsuKojoIraiGojoSeihoHaitoChild', 'Model');

/**
 * FtReigetsuKojoIraiGojoSeihoHaitoChild Test Case
 *
 */
class FtReigetsuKojoIraiGojoSeihoHaitoChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_gojo_seiho_haito_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiGojoSeihoHaitoChild = ClassRegistry::init('FtReigetsuKojoIraiGojoSeihoHaitoChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiGojoSeihoHaitoChild);

		parent::tearDown();
	}

}
