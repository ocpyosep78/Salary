<?php
App::uses('RetiredEmpInfo', 'Model');

/**
 * RetiredEmpInfo Test Case
 *
 */
class RetiredEmpInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.retired_emp_info'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RetiredEmpInfo = ClassRegistry::init('RetiredEmpInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RetiredEmpInfo);

		parent::tearDown();
	}

}
