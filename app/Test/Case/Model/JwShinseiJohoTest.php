<?php
App::uses('JwShinseiJoho', 'Model');

/**
 * JwShinseiJoho Test Case
 *
 */
class JwShinseiJohoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jw_shinsei_joho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JwShinseiJoho = ClassRegistry::init('JwShinseiJoho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JwShinseiJoho);

		parent::tearDown();
	}

}
