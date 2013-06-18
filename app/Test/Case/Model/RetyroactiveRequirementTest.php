<?php
App::uses('RetyroactiveRequirement', 'Model');

/**
 * RetyroactiveRequirement Test Case
 *
 */
class RetyroactiveRequirementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.retyroactive_requirement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RetyroactiveRequirement = ClassRegistry::init('RetyroactiveRequirement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RetyroactiveRequirement);

		parent::tearDown();
	}

}
