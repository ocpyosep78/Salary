<?php
App::uses('FtReigetsuKojoIraiToshokushin', 'Model');

/**
 * FtReigetsuKojoIraiToshokushin Test Case
 *
 */
class FtReigetsuKojoIraiToshokushinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_toshokushin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiToshokushin = ClassRegistry::init('FtReigetsuKojoIraiToshokushin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiToshokushin);

		parent::tearDown();
	}

}
