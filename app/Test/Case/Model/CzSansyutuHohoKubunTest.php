<?php
App::uses('CzSansyutuHohoKubun', 'Model');

/**
 * CzSansyutuHohoKubun Test Case
 *
 */
class CzSansyutuHohoKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_sansyutu_hoho_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzSansyutuHohoKubun = ClassRegistry::init('CzSansyutuHohoKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzSansyutuHohoKubun);

		parent::tearDown();
	}

}
