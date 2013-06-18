<?php
App::uses('SmTantoshaComment', 'Model');

/**
 * SmTantoshaComment Test Case
 *
 */
class SmTantoshaCommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_tantosha_comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmTantoshaComment = ClassRegistry::init('SmTantoshaComment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmTantoshaComment);

		parent::tearDown();
	}

}
