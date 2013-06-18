<?php
App::uses('CzKyuyoKetteiGakusekiSaibun', 'Model');

/**
 * CzKyuyoKetteiGakusekiSaibun Test Case
 *
 */
class CzKyuyoKetteiGakusekiSaibunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_kyuyo_kettei_gakuseki_saibun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzKyuyoKetteiGakusekiSaibun = ClassRegistry::init('CzKyuyoKetteiGakusekiSaibun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzKyuyoKetteiGakusekiSaibun);

		parent::tearDown();
	}

}
