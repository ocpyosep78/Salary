<?php
App::uses('FtReigetsuKojoIraiKyosaiKashitsukeChild', 'Model');

/**
 * FtReigetsuKojoIraiKyosaiKashitsukeChild Test Case
 *
 */
class FtReigetsuKojoIraiKyosaiKashitsukeChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_kyosai_kashitsuke_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiKyosaiKashitsukeChild = ClassRegistry::init('FtReigetsuKojoIraiKyosaiKashitsukeChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiKyosaiKashitsukeChild);

		parent::tearDown();
	}

}
