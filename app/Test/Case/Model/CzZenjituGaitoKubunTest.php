<?php
App::uses('CzZenjituGaitoKubun', 'Model');

/**
 * CzZenjituGaitoKubun Test Case
 *
 */
class CzZenjituGaitoKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_zenjitu_gaito_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzZenjituGaitoKubun = ClassRegistry::init('CzZenjituGaitoKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzZenjituGaitoKubun);

		parent::tearDown();
	}

}
