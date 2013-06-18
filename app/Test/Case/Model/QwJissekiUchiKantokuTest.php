<?php
App::uses('QwJissekiUchiKantoku', 'Model');

/**
 * QwJissekiUchiKantoku Test Case
 *
 */
class QwJissekiUchiKantokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_kantoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiKantoku = ClassRegistry::init('QwJissekiUchiKantoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiKantoku);

		parent::tearDown();
	}

}
