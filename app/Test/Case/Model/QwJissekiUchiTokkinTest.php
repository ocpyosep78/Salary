<?php
App::uses('QwJissekiUchiTokkin', 'Model');

/**
 * QwJissekiUchiTokkin Test Case
 *
 */
class QwJissekiUchiTokkinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_tokkin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiTokkin = ClassRegistry::init('QwJissekiUchiTokkin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiTokkin);

		parent::tearDown();
	}

}
