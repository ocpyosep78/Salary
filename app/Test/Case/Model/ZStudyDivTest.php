<?php
App::uses('ZStudyDiv', 'Model');

/**
 * ZStudyDiv Test Case
 *
 */
class ZStudyDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_study_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZStudyDiv = ClassRegistry::init('ZStudyDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZStudyDiv);

		parent::tearDown();
	}

}
