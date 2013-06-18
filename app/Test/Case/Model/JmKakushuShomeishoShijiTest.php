<?php
App::uses('JmKakushuShomeishoShiji', 'Model');

/**
 * JmKakushuShomeishoShiji Test Case
 *
 */
class JmKakushuShomeishoShijiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_kakushu_shomeisho_shiji'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmKakushuShomeishoShiji = ClassRegistry::init('JmKakushuShomeishoShiji');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmKakushuShomeishoShiji);

		parent::tearDown();
	}

}
