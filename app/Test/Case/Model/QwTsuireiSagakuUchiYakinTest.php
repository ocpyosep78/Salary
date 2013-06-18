<?php
App::uses('QwTsuireiSagakuUchiYakin', 'Model');

/**
 * QwTsuireiSagakuUchiYakin Test Case
 *
 */
class QwTsuireiSagakuUchiYakinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_yakin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiYakin = ClassRegistry::init('QwTsuireiSagakuUchiYakin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiYakin);

		parent::tearDown();
	}

}
