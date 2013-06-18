<?php
App::uses('JtKihonKazokuZeikojo', 'Model');

/**
 * JtKihonKazokuZeikojo Test Case
 *
 */
class JtKihonKazokuZeikojoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jt_kihon_kazoku_zeikojo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JtKihonKazokuZeikojo = ClassRegistry::init('JtKihonKazokuZeikojo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JtKihonKazokuZeikojo);

		parent::tearDown();
	}

}
