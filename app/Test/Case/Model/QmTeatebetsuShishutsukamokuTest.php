<?php
App::uses('QmTeatebetsuShishutsukamoku', 'Model');

/**
 * QmTeatebetsuShishutsukamoku Test Case
 *
 */
class QmTeatebetsuShishutsukamokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_teatebetsu_shishutsukamoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTeatebetsuShishutsukamoku = ClassRegistry::init('QmTeatebetsuShishutsukamoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTeatebetsuShishutsukamoku);

		parent::tearDown();
	}

}
