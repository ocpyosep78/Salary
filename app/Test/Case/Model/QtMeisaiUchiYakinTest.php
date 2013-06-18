<?php
App::uses('QtMeisaiUchiYakin', 'Model');

/**
 * QtMeisaiUchiYakin Test Case
 *
 */
class QtMeisaiUchiYakinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_yakin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiYakin = ClassRegistry::init('QtMeisaiUchiYakin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiYakin);

		parent::tearDown();
	}

}
