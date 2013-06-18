<?php
App::uses('QwJissekiUchiYakin', 'Model');

/**
 * QwJissekiUchiYakin Test Case
 *
 */
class QwJissekiUchiYakinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qw_jisseki_uchi_yakin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QwJissekiUchiYakin = ClassRegistry::init('QwJissekiUchiYakin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QwJissekiUchiYakin);

		parent::tearDown();
	}

}
