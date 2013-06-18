<?php
App::uses('QwJisseki', 'Model');

/**
 * QwJisseki Test Case
 *
 */
class QwJissekiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJisseki = ClassRegistry::init('QwJisseki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJisseki);

		parent::tearDown();
	}

}
