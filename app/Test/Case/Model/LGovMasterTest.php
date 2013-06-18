<?php
App::uses('LGovMaster', 'Model');

/**
 * LGovMaster Test Case
 *
 */
class LGovMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.l_gov_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LGovMaster = ClassRegistry::init('LGovMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LGovMaster);

		parent::tearDown();
	}

}
