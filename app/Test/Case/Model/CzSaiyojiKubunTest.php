<?php
App::uses('CzSaiyojiKubun', 'Model');

/**
 * CzSaiyojiKubun Test Case
 *
 */
class CzSaiyojiKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_saiyoji_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzSaiyojiKubun = ClassRegistry::init('CzSaiyojiKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzSaiyojiKubun);

		parent::tearDown();
	}

}
