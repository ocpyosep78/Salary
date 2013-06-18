<?php
App::uses('FzPointkenSikyuKubun', 'Model');

/**
 * FzPointkenSikyuKubun Test Case
 *
 */
class FzPointkenSikyuKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fz_pointken_sikyu_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FzPointkenSikyuKubun = ClassRegistry::init('FzPointkenSikyuKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FzPointkenSikyuKubun);

		parent::tearDown();
	}

}
