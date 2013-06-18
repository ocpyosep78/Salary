<?php
App::uses('CzGyomuCategory', 'Model');

/**
 * CzGyomuCategory Test Case
 *
 */
class CzGyomuCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_gyomu_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzGyomuCategory = ClassRegistry::init('CzGyomuCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzGyomuCategory);

		parent::tearDown();
	}

}
