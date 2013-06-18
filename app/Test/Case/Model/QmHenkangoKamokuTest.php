<?php
App::uses('QmHenkangoKamoku', 'Model');

/**
 * QmHenkangoKamoku Test Case
 *
 */
class QmHenkangoKamokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_henkango_kamoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmHenkangoKamoku = ClassRegistry::init('QmHenkangoKamoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmHenkangoKamoku);

		parent::tearDown();
	}

}
