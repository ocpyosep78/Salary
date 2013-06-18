<?php
App::uses('CzTeateKubun', 'Model');

/**
 * CzTeateKubun Test Case
 *
 */
class CzTeateKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_teate_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzTeateKubun = ClassRegistry::init('CzTeateKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzTeateKubun);

		parent::tearDown();
	}

}
