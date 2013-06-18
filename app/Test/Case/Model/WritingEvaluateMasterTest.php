<?php
App::uses('WritingEvaluateMaster', 'Model');

/**
 * WritingEvaluateMaster Test Case
 *
 */
class WritingEvaluateMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.writing_evaluate_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WritingEvaluateMaster = ClassRegistry::init('WritingEvaluateMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WritingEvaluateMaster);

		parent::tearDown();
	}

}
