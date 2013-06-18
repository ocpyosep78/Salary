<?php
App::uses('SmKamokuJikanwariTouroku', 'Model');

/**
 * SmKamokuJikanwariTouroku Test Case
 *
 */
class SmKamokuJikanwariTourokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sm_kamoku_jikanwari_touroku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SmKamokuJikanwariTouroku = ClassRegistry::init('SmKamokuJikanwariTouroku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SmKamokuJikanwariTouroku);

		parent::tearDown();
	}

}
