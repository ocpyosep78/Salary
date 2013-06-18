<?php
App::uses('JtKinmuKyujitsuCalendar2', 'Model');

/**
 * JtKinmuKyujitsuCalendar2 Test Case
 *
 */
class JtKinmuKyujitsuCalendar2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kinmu_kyujitsu_calendar2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKinmuKyujitsuCalendar2 = ClassRegistry::init('JtKinmuKyujitsuCalendar2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKinmuKyujitsuCalendar2);

		parent::tearDown();
	}

}
