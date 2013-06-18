<?php
App::uses('FtReigetsuKojoIraiGojoGrpHokenHaitoChild', 'Model');

/**
 * FtReigetsuKojoIraiGojoGrpHokenHaitoChild Test Case
 *
 */
class FtReigetsuKojoIraiGojoGrpHokenHaitoChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_gojo_grp_hoken_haito_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiGojoGrpHokenHaitoChild = ClassRegistry::init('FtReigetsuKojoIraiGojoGrpHokenHaitoChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiGojoGrpHokenHaitoChild);

		parent::tearDown();
	}

}
