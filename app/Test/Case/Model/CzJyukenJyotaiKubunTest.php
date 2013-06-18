<?php
App::uses('CzJyukenJyotaiKubun', 'Model');

/**
 * CzJyukenJyotaiKubun Test Case
 *
 */
class CzJyukenJyotaiKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_jyuken_jyotai_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzJyukenJyotaiKubun = ClassRegistry::init('CzJyukenJyotaiKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzJyukenJyotaiKubun);

		parent::tearDown();
	}

}
