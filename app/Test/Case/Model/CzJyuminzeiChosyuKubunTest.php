<?php
App::uses('CzJyuminzeiChosyuKubun', 'Model');

/**
 * CzJyuminzeiChosyuKubun Test Case
 *
 */
class CzJyuminzeiChosyuKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_jyuminzei_chosyu_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzJyuminzeiChosyuKubun = ClassRegistry::init('CzJyuminzeiChosyuKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzJyuminzeiChosyuKubun);

		parent::tearDown();
	}

}
