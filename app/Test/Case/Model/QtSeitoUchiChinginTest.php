<?php
App::uses('QtSeitoUchiChingin', 'Model');

/**
 * QtSeitoUchiChingin Test Case
 *
 */
class QtSeitoUchiChinginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_chingin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiChingin = ClassRegistry::init('QtSeitoUchiChingin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiChingin);

		parent::tearDown();
	}

}
