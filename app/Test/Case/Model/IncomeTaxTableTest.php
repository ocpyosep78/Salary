<?php
App::uses('IncomeTaxTable', 'Model');

/**
 * IncomeTaxTable Test Case
 *
 */
class IncomeTaxTableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.income_tax_table'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IncomeTaxTable = ClassRegistry::init('IncomeTaxTable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IncomeTaxTable);

		parent::tearDown();
	}

}
