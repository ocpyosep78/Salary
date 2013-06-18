<?php
App::uses('FtBetsunouNoufujisseki', 'Model');

/**
 * FtBetsunouNoufujisseki Test Case
 *
 */
class FtBetsunouNoufujissekiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_betsunou_noufujisseki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtBetsunouNoufujisseki = ClassRegistry::init('FtBetsunouNoufujisseki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtBetsunouNoufujisseki);

		parent::tearDown();
	}

}
