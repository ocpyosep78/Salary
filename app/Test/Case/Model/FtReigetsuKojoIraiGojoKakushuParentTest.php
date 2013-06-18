<?php
App::uses('FtReigetsuKojoIraiGojoKakushuParent', 'Model');

/**
 * FtReigetsuKojoIraiGojoKakushuParent Test Case
 *
 */
class FtReigetsuKojoIraiGojoKakushuParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_gojo_kakushu_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiGojoKakushuParent = ClassRegistry::init('FtReigetsuKojoIraiGojoKakushuParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiGojoKakushuParent);

		parent::tearDown();
	}

}
