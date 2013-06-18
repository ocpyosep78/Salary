<?php
App::uses('QmHoshogaku', 'Model');

/**
 * QmHoshogaku Test Case
 *
 */
class QmHoshogakuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_hoshogaku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmHoshogaku = ClassRegistry::init('QmHoshogaku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmHoshogaku);

		parent::tearDown();
	}

}
