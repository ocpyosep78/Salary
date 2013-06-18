<?php
App::uses('CsvTest', 'Model');

/**
 * CsvTest Test Case
 *
 */
class CsvTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.csv_test'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CsvTest = ClassRegistry::init('CsvTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CsvTest);

		parent::tearDown();
	}

}
