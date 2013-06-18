<?php
App::uses('DependentRelativesBasic', 'Model');

/**
 * DependentRelativesBasic Test Case
 *
 */
class DependentRelativesBasicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dependent_relatives_basic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DependentRelativesBasic = ClassRegistry::init('DependentRelativesBasic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DependentRelativesBasic);

		parent::tearDown();
	}

}
