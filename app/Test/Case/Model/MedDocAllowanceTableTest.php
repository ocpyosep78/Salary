<?php
App::uses('MedDocAllowanceTable', 'Model');

/**
 * MedDocAllowanceTable Test Case
 *
 */
class MedDocAllowanceTableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.med_doc_allowance_table'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MedDocAllowanceTable = ClassRegistry::init('MedDocAllowanceTable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MedDocAllowanceTable);

		parent::tearDown();
	}

}
