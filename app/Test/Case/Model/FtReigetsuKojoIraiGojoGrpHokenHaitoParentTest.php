<?php
App::uses('FtReigetsuKojoIraiGojoGrpHokenHaitoParent', 'Model');

/**
 * FtReigetsuKojoIraiGojoGrpHokenHaitoParent Test Case
 *
 */
class FtReigetsuKojoIraiGojoGrpHokenHaitoParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_gojo_grp_hoken_haito_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiGojoGrpHokenHaitoParent = ClassRegistry::init('FtReigetsuKojoIraiGojoGrpHokenHaitoParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiGojoGrpHokenHaitoParent);

		parent::tearDown();
	}

}
