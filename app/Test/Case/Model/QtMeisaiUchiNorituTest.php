<?php
App::uses('QtMeisaiUchiNoritu', 'Model');

/**
 * QtMeisaiUchiNoritu Test Case
 *
 */
class QtMeisaiUchiNorituTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_noritu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiNoritu = ClassRegistry::init('QtMeisaiUchiNoritu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiNoritu);

		parent::tearDown();
	}

}
