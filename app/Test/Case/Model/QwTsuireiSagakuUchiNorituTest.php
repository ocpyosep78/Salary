<?php
App::uses('QwTsuireiSagakuUchiNoritu', 'Model');

/**
 * QwTsuireiSagakuUchiNoritu Test Case
 *
 */
class QwTsuireiSagakuUchiNorituTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_tsuirei_sagaku_uchi_noritu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwTsuireiSagakuUchiNoritu = ClassRegistry::init('QwTsuireiSagakuUchiNoritu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwTsuireiSagakuUchiNoritu);

		parent::tearDown();
	}

}
