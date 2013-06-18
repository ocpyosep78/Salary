<?php
App::uses('QwJissekiUchiShuku', 'Model');

/**
 * QwJissekiUchiShuku Test Case
 *
 */
class QwJissekiUchiShukuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_shuku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiShuku = ClassRegistry::init('QwJissekiUchiShuku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiShuku);

		parent::tearDown();
	}

}
