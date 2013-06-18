<?php
App::uses('FtKojoIraiStatus', 'Model');

/**
 * FtKojoIraiStatus Test Case
 *
 */
class FtKojoIraiStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_kojo_irai_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtKojoIraiStatus = ClassRegistry::init('FtKojoIraiStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtKojoIraiStatus);

		parent::tearDown();
	}

}
