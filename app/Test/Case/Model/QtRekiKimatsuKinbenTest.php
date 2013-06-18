<?php
App::uses('QtRekiKimatsuKinben', 'Model');

/**
 * QtRekiKimatsuKinben Test Case
 *
 */
class QtRekiKimatsuKinbenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_reki_kimatsu_kinben'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtRekiKimatsuKinben = ClassRegistry::init('QtRekiKimatsuKinben');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtRekiKimatsuKinben);

		parent::tearDown();
	}

}
