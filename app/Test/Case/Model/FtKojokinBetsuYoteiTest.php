<?php
App::uses('FtKojokinBetsuYotei', 'Model');

/**
 * FtKojokinBetsuYotei Test Case
 *
 */
class FtKojokinBetsuYoteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_kojokin_betsu_yotei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtKojokinBetsuYotei = ClassRegistry::init('FtKojokinBetsuYotei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtKojokinBetsuYotei);

		parent::tearDown();
	}

}
