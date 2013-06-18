<?php
App::uses('QwMeisaiUchiNoritu', 'Model');

/**
 * QwMeisaiUchiNoritu Test Case
 *
 */
class QwMeisaiUchiNorituTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_meisai_uchi_noritu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwMeisaiUchiNoritu = ClassRegistry::init('QwMeisaiUchiNoritu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwMeisaiUchiNoritu);

		parent::tearDown();
	}

}
