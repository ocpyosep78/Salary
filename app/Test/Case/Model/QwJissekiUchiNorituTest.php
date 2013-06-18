<?php
App::uses('QwJissekiUchiNoritu', 'Model');

/**
 * QwJissekiUchiNoritu Test Case
 *
 */
class QwJissekiUchiNorituTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_noritu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiNoritu = ClassRegistry::init('QwJissekiUchiNoritu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiNoritu);

		parent::tearDown();
	}

}
