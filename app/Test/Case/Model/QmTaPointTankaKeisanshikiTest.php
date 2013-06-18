<?php
App::uses('QmTaPointTankaKeisanshiki', 'Model');

/**
 * QmTaPointTankaKeisanshiki Test Case
 *
 */
class QmTaPointTankaKeisanshikiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_point_tanka_keisanshiki'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaPointTankaKeisanshiki = ClassRegistry::init('QmTaPointTankaKeisanshiki');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaPointTankaKeisanshiki);

		parent::tearDown();
	}

}
