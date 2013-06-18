<?php
App::uses('QtMasterHiwari', 'Model');

/**
 * QtMasterHiwari Test Case
 *
 */
class QtMasterHiwariTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_master_hiwari'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMasterHiwari = ClassRegistry::init('QtMasterHiwari');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMasterHiwari);

		parent::tearDown();
	}

}
