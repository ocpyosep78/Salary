<?php
App::uses('CzGyomuKubun', 'Model');

/**
 * CzGyomuKubun Test Case
 *
 */
class CzGyomuKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_gyomu_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzGyomuKubun = ClassRegistry::init('CzGyomuKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzGyomuKubun);

		parent::tearDown();
	}

}
