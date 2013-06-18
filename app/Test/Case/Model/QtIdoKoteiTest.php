<?php
App::uses('QtIdoKotei', 'Model');

/**
 * QtIdoKotei Test Case
 *
 */
class QtIdoKoteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_ido_kotei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtIdoKotei = ClassRegistry::init('QtIdoKotei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtIdoKotei);

		parent::tearDown();
	}

}
