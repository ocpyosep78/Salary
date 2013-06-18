<?php
App::uses('QwMeisaiUchiFukurikojo', 'Model');

/**
 * QwMeisaiUchiFukurikojo Test Case
 *
 */
class QwMeisaiUchiFukurikojoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_fukurikojo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiFukurikojo = ClassRegistry::init('QwMeisaiUchiFukurikojo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiFukurikojo);

		parent::tearDown();
	}

}
