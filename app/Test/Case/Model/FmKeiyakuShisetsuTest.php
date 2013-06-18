<?php
App::uses('FmKeiyakuShisetsu', 'Model');

/**
 * FmKeiyakuShisetsu Test Case
 *
 */
class FmKeiyakuShisetsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fm_keiyaku_shisetsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FmKeiyakuShisetsu = ClassRegistry::init('FmKeiyakuShisetsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FmKeiyakuShisetsu);

		parent::tearDown();
	}

}
