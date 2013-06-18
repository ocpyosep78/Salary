<?php
App::uses('FtReigetsuKojoIraiFlatdatum', 'Model');

/**
 * FtReigetsuKojoIraiFlatdatum Test Case
 *
 */
class FtReigetsuKojoIraiFlatdatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_flatdatum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiFlatdatum = ClassRegistry::init('FtReigetsuKojoIraiFlatdatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiFlatdatum);

		parent::tearDown();
	}

}
