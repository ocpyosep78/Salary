<?php
App::uses('QwJissekiUchiRyohi', 'Model');

/**
 * QwJissekiUchiRyohi Test Case
 *
 */
class QwJissekiUchiRyohiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_ryohi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiRyohi = ClassRegistry::init('QwJissekiUchiRyohi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiRyohi);

		parent::tearDown();
	}

}
