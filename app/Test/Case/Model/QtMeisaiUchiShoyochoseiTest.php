<?php
App::uses('QtMeisaiUchiShoyochosei', 'Model');

/**
 * QtMeisaiUchiShoyochosei Test Case
 *
 */
class QtMeisaiUchiShoyochoseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_shoyochosei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiShoyochosei = ClassRegistry::init('QtMeisaiUchiShoyochosei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiShoyochosei);

		parent::tearDown();
	}

}
