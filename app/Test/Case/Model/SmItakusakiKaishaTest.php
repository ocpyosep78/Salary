<?php
App::uses('SmItakusakiKaisha', 'Model');

/**
 * SmItakusakiKaisha Test Case
 *
 */
class SmItakusakiKaishaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_itakusaki_kaisha'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmItakusakiKaisha = ClassRegistry::init('SmItakusakiKaisha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmItakusakiKaisha);

		parent::tearDown();
	}

}
