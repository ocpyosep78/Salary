<?php
App::uses('FtBetsunouJyokyo', 'Model');

/**
 * FtBetsunouJyokyo Test Case
 *
 */
class FtBetsunouJyokyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_betsunou_jyokyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtBetsunouJyokyo = ClassRegistry::init('FtBetsunouJyokyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtBetsunouJyokyo);

		parent::tearDown();
	}

}
