<?php
App::uses('QtTaSeisoChosei', 'Model');

/**
 * QtTaSeisoChosei Test Case
 *
 */
class QtTaSeisoChoseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qt_ta_seiso_chosei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QtTaSeisoChosei = ClassRegistry::init('QtTaSeisoChosei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QtTaSeisoChosei);

		parent::tearDown();
	}

}
