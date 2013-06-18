<?php
App::uses('JtShukkinboHigotoKinmu2', 'Model');

/**
 * JtShukkinboHigotoKinmu2 Test Case
 *
 */
class JtShukkinboHigotoKinmu2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_higoto_kinmu2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboHigotoKinmu2 = ClassRegistry::init('JtShukkinboHigotoKinmu2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboHigotoKinmu2);

		parent::tearDown();
	}

}
