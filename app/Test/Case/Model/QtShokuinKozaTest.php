<?php
App::uses('QtShokuinKoza', 'Model');

/**
 * QtShokuinKoza Test Case
 *
 */
class QtShokuinKozaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_shokuin_koza'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtShokuinKoza = ClassRegistry::init('QtShokuinKoza');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtShokuinKoza);

		parent::tearDown();
	}

}
