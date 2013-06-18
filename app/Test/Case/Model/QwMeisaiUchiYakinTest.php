<?php
App::uses('QwMeisaiUchiYakin', 'Model');

/**
 * QwMeisaiUchiYakin Test Case
 *
 */
class QwMeisaiUchiYakinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_yakin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiYakin = ClassRegistry::init('QwMeisaiUchiYakin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiYakin);

		parent::tearDown();
	}

}
