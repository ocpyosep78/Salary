<?php
App::uses('QtSeitoKotei', 'Model');

/**
 * QtSeitoKotei Test Case
 *
 */
class QtSeitoKoteiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_kotei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoKotei = ClassRegistry::init('QtSeitoKotei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoKotei);

		parent::tearDown();
	}

}
