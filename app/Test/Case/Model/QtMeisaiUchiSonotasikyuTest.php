<?php
App::uses('QtMeisaiUchiSonotasikyu', 'Model');

/**
 * QtMeisaiUchiSonotasikyu Test Case
 *
 */
class QtMeisaiUchiSonotasikyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_uchi_sonotasikyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiUchiSonotasikyu = ClassRegistry::init('QtMeisaiUchiSonotasikyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiUchiSonotasikyu);

		parent::tearDown();
	}

}
