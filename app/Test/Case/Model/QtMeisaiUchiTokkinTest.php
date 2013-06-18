<?php
App::uses('QtMeisaiUchiTokkin', 'Model');

/**
 * QtMeisaiUchiTokkin Test Case
 *
 */
class QtMeisaiUchiTokkinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_tokkin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiTokkin = ClassRegistry::init('QtMeisaiUchiTokkin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiTokkin);

		parent::tearDown();
	}

}
