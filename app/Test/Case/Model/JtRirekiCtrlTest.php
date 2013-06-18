<?php
App::uses('JtRirekiCtrl', 'Model');

/**
 * JtRirekiCtrl Test Case
 *
 */
class JtRirekiCtrlTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_rireki_ctrl'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtRirekiCtrl = ClassRegistry::init('JtRirekiCtrl');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtRirekiCtrl);

		parent::tearDown();
	}

}
