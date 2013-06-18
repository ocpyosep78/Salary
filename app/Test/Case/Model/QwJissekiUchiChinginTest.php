<?php
App::uses('QwJissekiUchiChingin', 'Model');

/**
 * QwJissekiUchiChingin Test Case
 *
 */
class QwJissekiUchiChinginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_chingin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiChingin = ClassRegistry::init('QwJissekiUchiChingin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiChingin);

		parent::tearDown();
	}

}
