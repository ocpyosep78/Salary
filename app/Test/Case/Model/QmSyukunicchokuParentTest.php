<?php
App::uses('QmSyukunicchokuParent', 'Model');

/**
 * QmSyukunicchokuParent Test Case
 *
 */
class QmSyukunicchokuParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syukunicchoku_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyukunicchokuParent = ClassRegistry::init('QmSyukunicchokuParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyukunicchokuParent);

		parent::tearDown();
	}

}
