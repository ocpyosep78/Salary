<?php
App::uses('QmJissekiKyukamoku', 'Model');

/**
 * QmJissekiKyukamoku Test Case
 *
 */
class QmJissekiKyukamokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_jisseki_kyukamoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmJissekiKyukamoku = ClassRegistry::init('QmJissekiKyukamoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmJissekiKyukamoku);

		parent::tearDown();
	}

}
