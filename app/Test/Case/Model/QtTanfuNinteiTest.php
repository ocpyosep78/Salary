<?php
App::uses('QtTanfuNintei', 'Model');

/**
 * QtTanfuNintei Test Case
 *
 */
class QtTanfuNinteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_tanfu_nintei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtTanfuNintei = ClassRegistry::init('QtTanfuNintei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtTanfuNintei);

		parent::tearDown();
	}

}
