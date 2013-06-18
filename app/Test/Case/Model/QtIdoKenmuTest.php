<?php
App::uses('QtIdoKenmu', 'Model');

/**
 * QtIdoKenmu Test Case
 *
 */
class QtIdoKenmuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_ido_kenmu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtIdoKenmu = ClassRegistry::init('QtIdoKenmu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtIdoKenmu);

		parent::tearDown();
	}

}
