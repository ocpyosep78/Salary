<?php
App::uses('JtShukkinboHigotoKinmu', 'Model');

/**
 * JtShukkinboHigotoKinmu Test Case
 *
 */
class JtShukkinboHigotoKinmuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_shukkinbo_higoto_kinmu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtShukkinboHigotoKinmu = ClassRegistry::init('JtShukkinboHigotoKinmu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtShukkinboHigotoKinmu);

		parent::tearDown();
	}

}
