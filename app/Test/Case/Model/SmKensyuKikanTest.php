<?php
App::uses('SmKensyuKikan', 'Model');

/**
 * SmKensyuKikan Test Case
 *
 */
class SmKensyuKikanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kensyu_kikan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKensyuKikan = ClassRegistry::init('SmKensyuKikan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKensyuKikan);

		parent::tearDown();
	}

}
