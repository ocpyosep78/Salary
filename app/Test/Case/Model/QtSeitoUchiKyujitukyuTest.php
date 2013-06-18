<?php
App::uses('QtSeitoUchiKyujitukyu', 'Model');

/**
 * QtSeitoUchiKyujitukyu Test Case
 *
 */
class QtSeitoUchiKyujitukyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_seito_uchi_kyujitukyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtSeitoUchiKyujitukyu = ClassRegistry::init('QtSeitoUchiKyujitukyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtSeitoUchiKyujitukyu);

		parent::tearDown();
	}

}
