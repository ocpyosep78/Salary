<?php
App::uses('QmSyukunicchokuChild', 'Model');

/**
 * QmSyukunicchokuChild Test Case
 *
 */
class QmSyukunicchokuChildTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syukunicchoku_child'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyukunicchokuChild = ClassRegistry::init('QmSyukunicchokuChild');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyukunicchokuChild);

		parent::tearDown();
	}

}
