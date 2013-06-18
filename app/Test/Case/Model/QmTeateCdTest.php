<?php
App::uses('QmTeateCd', 'Model');

/**
 * QmTeateCd Test Case
 *
 */
class QmTeateCdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_teate_cd'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTeateCd = ClassRegistry::init('QmTeateCd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTeateCd);

		parent::tearDown();
	}

}
