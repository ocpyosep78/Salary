<?php
App::uses('QtMeisaiHiwari', 'Model');

/**
 * QtMeisaiHiwari Test Case
 *
 */
class QtMeisaiHiwariTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_meisai_hiwari'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtMeisaiHiwari = ClassRegistry::init('QtMeisaiHiwari');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtMeisaiHiwari);

		parent::tearDown();
	}

}
