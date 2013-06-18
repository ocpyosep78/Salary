<?php
App::uses('CzTukiichibuGaitoKubun', 'Model');

/**
 * CzTukiichibuGaitoKubun Test Case
 *
 */
class CzTukiichibuGaitoKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_tukiichibu_gaito_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzTukiichibuGaitoKubun = ClassRegistry::init('CzTukiichibuGaitoKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzTukiichibuGaitoKubun);

		parent::tearDown();
	}

}
