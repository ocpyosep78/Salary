<?php
App::uses('QmSiteiNo', 'Model');

/**
 * QmSiteiNo Test Case
 *
 */
class QmSiteiNoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_sitei_no'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSiteiNo = ClassRegistry::init('QmSiteiNo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSiteiNo);

		parent::tearDown();
	}

}
