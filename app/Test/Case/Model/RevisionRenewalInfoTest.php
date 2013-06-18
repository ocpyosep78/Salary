<?php
App::uses('RevisionRenewalInfo', 'Model');

/**
 * RevisionRenewalInfo Test Case
 *
 */
class RevisionRenewalInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.revision_renewal_info'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RevisionRenewalInfo = ClassRegistry::init('RevisionRenewalInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RevisionRenewalInfo);

		parent::tearDown();
	}

}
