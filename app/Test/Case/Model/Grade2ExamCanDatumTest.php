<?php
App::uses('Grade2ExamCanDatum', 'Model');

/**
 * Grade2ExamCanDatum Test Case
 *
 */
class Grade2ExamCanDatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grade2_exam_can_datum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grade2ExamCanDatum = ClassRegistry::init('Grade2ExamCanDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grade2ExamCanDatum);

		parent::tearDown();
	}

}
