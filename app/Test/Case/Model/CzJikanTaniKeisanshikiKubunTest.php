<?php
App::uses('CzJikanTaniKeisanshikiKubun', 'Model');

/**
 * CzJikanTaniKeisanshikiKubun Test Case
 *
 */
class CzJikanTaniKeisanshikiKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_jikan_tani_keisanshiki_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzJikanTaniKeisanshikiKubun = ClassRegistry::init('CzJikanTaniKeisanshikiKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzJikanTaniKeisanshikiKubun);

		parent::tearDown();
	}

}
