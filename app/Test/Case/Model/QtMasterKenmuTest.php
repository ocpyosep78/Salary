<?php
App::uses('QtMasterKenmu', 'Model');

/**
 * QtMasterKenmu Test Case
 *
 */
class QtMasterKenmuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_master_kenmu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMasterKenmu = ClassRegistry::init('QtMasterKenmu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMasterKenmu);

		parent::tearDown();
	}

}
