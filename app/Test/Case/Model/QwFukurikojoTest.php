<?php
App::uses('QwFukurikojo', 'Model');

/**
 * QwFukurikojo Test Case
 *
 */
class QwFukurikojoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_fukurikojo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwFukurikojo = ClassRegistry::init('QwFukurikojo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwFukurikojo);

		parent::tearDown();
	}

}
