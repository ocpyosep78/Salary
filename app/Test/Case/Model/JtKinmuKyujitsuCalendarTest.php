<?php
App::uses('JtKinmuKyujitsuCalendar', 'Model');

/**
 * JtKinmuKyujitsuCalendar Test Case
 *
 */
class JtKinmuKyujitsuCalendarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kinmu_kyujitsu_calendar'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKinmuKyujitsuCalendar = ClassRegistry::init('JtKinmuKyujitsuCalendar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKinmuKyujitsuCalendar);

		parent::tearDown();
	}

}
