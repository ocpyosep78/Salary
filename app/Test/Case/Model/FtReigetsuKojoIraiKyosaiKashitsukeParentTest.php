<?php
App::uses('FtReigetsuKojoIraiKyosaiKashitsukeParent', 'Model');

/**
 * FtReigetsuKojoIraiKyosaiKashitsukeParent Test Case
 *
 */
class FtReigetsuKojoIraiKyosaiKashitsukeParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_kyosai_kashitsuke_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiKyosaiKashitsukeParent = ClassRegistry::init('FtReigetsuKojoIraiKyosaiKashitsukeParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiKyosaiKashitsukeParent);

		parent::tearDown();
	}

}
