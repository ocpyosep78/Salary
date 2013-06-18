<?php
App::uses('JmHatsureiKikan', 'Model');

/**
 * JmHatsureiKikan Test Case
 *
 */
class JmHatsureiKikanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_hatsurei_kikan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmHatsureiKikan = ClassRegistry::init('JmHatsureiKikan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmHatsureiKikan);

		parent::tearDown();
	}

}
