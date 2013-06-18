<?php
App::uses('SmKaijouResume', 'Model');

/**
 * SmKaijouResume Test Case
 *
 */
class SmKaijouResumeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kaijou_resume'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKaijouResume = ClassRegistry::init('SmKaijouResume');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKaijouResume);

		parent::tearDown();
	}

}
