<?php
App::uses('JzTanshukuenshinTsukisu', 'Model');

/**
 * JzTanshukuenshinTsukisu Test Case
 *
 */
class JzTanshukuenshinTsukisuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jz_tanshukuenshin_tsukisu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JzTanshukuenshinTsukisu = ClassRegistry::init('JzTanshukuenshinTsukisu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JzTanshukuenshinTsukisu);

		parent::tearDown();
	}

}
