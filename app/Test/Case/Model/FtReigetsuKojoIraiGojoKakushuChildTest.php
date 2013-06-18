<?php
App::uses('FtReigetsuKojoIraiGojoKakushuChild', 'Model');

/**
 * FtReigetsuKojoIraiGojoKakushuChild Test Case
 *
 */
class FtReigetsuKojoIraiGojoKakushuChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_reigetsu_kojo_irai_gojo_kakushu_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtReigetsuKojoIraiGojoKakushuChild = ClassRegistry::init('FtReigetsuKojoIraiGojoKakushuChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtReigetsuKojoIraiGojoKakushuChild);

		parent::tearDown();
	}

}
