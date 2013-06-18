<?php
App::uses('ZSalaryTableClsName', 'Model');

/**
 * ZSalaryTableClsName Test Case
 *
 */
class ZSalaryTableClsNameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_salary_table_cls_name'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZSalaryTableClsName = ClassRegistry::init('ZSalaryTableClsName');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZSalaryTableClsName);

		parent::tearDown();
	}

}
