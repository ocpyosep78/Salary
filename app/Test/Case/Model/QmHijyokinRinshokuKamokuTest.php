<?php
App::uses('QmHijyokinRinshokuKamoku', 'Model');

/**
 * QmHijyokinRinshokuKamoku Test Case
 *
 */
class QmHijyokinRinshokuKamokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_hijyokin_rinshoku_kamoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmHijyokinRinshokuKamoku = ClassRegistry::init('QmHijyokinRinshokuKamoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmHijyokinRinshokuKamoku);

		parent::tearDown();
	}

}
