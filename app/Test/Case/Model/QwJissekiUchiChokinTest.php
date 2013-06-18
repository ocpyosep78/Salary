<?php
App::uses('QwJissekiUchiChokin', 'Model');

/**
 * QwJissekiUchiChokin Test Case
 *
 */
class QwJissekiUchiChokinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_chokin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiChokin = ClassRegistry::init('QwJissekiUchiChokin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiChokin);

		parent::tearDown();
	}

}
