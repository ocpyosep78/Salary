<?php
App::uses('QtMeisaiUchiShuku', 'Model');

/**
 * QtMeisaiUchiShuku Test Case
 *
 */
class QtMeisaiUchiShukuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_shuku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiShuku = ClassRegistry::init('QtMeisaiUchiShuku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiShuku);

		parent::tearDown();
	}

}
