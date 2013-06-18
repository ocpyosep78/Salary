<?php
App::uses('CzHyosyo', 'Model');

/**
 * CzHyosyo Test Case
 *
 */
class CzHyosyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_hyosyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzHyosyo = ClassRegistry::init('CzHyosyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzHyosyo);

		parent::tearDown();
	}

}
