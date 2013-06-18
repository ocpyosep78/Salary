<?php
App::uses('QtMeisaiUchiRyohi', 'Model');

/**
 * QtMeisaiUchiRyohi Test Case
 *
 */
class QtMeisaiUchiRyohiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_ryohi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiRyohi = ClassRegistry::init('QtMeisaiUchiRyohi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiRyohi);

		parent::tearDown();
	}

}
