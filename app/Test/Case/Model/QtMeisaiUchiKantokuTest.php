<?php
App::uses('QtMeisaiUchiKantoku', 'Model');

/**
 * QtMeisaiUchiKantoku Test Case
 *
 */
class QtMeisaiUchiKantokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_kantoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiKantoku = ClassRegistry::init('QtMeisaiUchiKantoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiKantoku);

		parent::tearDown();
	}

}
