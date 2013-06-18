<?php
App::uses('FtGojokaiKyufukinShikyu', 'Model');

/**
 * FtGojokaiKyufukinShikyu Test Case
 *
 */
class FtGojokaiKyufukinShikyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_gojokai_kyufukin_shikyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtGojokaiKyufukinShikyu = ClassRegistry::init('FtGojokaiKyufukinShikyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtGojokaiKyufukinShikyu);

		parent::tearDown();
	}

}
