<?php
App::uses('QmKaihiTeigakuChild', 'Model');

/**
 * QmKaihiTeigakuChild Test Case
 *
 */
class QmKaihiTeigakuChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kaihi_teigaku_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKaihiTeigakuChild = ClassRegistry::init('QmKaihiTeigakuChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKaihiTeigakuChild);

		parent::tearDown();
	}

}
