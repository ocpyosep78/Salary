<?php
App::uses('CzRirekiCardKisaiKubun', 'Model');

/**
 * CzRirekiCardKisaiKubun Test Case
 *
 */
class CzRirekiCardKisaiKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_rireki_card_kisai_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzRirekiCardKisaiKubun = ClassRegistry::init('CzRirekiCardKisaiKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzRirekiCardKisaiKubun);

		parent::tearDown();
	}

}
