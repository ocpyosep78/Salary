<?php
App::uses('JtNafudaJoho', 'Model');

/**
 * JtNafudaJoho Test Case
 *
 */
class JtNafudaJohoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_nafuda_joho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtNafudaJoho = ClassRegistry::init('JtNafudaJoho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtNafudaJoho);

		parent::tearDown();
	}

}
