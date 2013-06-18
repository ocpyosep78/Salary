<?php
App::uses('ZLongtimeEmpDiv', 'Model');

/**
 * ZLongtimeEmpDiv Test Case
 *
 */
class ZLongtimeEmpDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_longtime_emp_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZLongtimeEmpDiv = ClassRegistry::init('ZLongtimeEmpDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZLongtimeEmpDiv);

		parent::tearDown();
	}

}
