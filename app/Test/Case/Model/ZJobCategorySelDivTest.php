<?php
App::uses('ZJobCategorySelDiv', 'Model');

/**
 * ZJobCategorySelDiv Test Case
 *
 */
class ZJobCategorySelDivTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.z_job_category_sel_div'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZJobCategorySelDiv = ClassRegistry::init('ZJobCategorySelDiv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZJobCategorySelDiv);

		parent::tearDown();
	}

}
