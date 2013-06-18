<?php
App::uses('QmSyakaiHoken', 'Model');

/**
 * QmSyakaiHoken Test Case
 *
 */
class QmSyakaiHokenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syakai_hoken'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyakaiHoken = ClassRegistry::init('QmSyakaiHoken');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyakaiHoken);

		parent::tearDown();
	}

}
