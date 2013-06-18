<?php
App::uses('QmKmjiyuSikyuWariai', 'Model');

/**
 * QmKmjiyuSikyuWariai Test Case
 *
 */
class QmKmjiyuSikyuWariaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kmjiyu_sikyu_wariai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmjiyuSikyuWariai = ClassRegistry::init('QmKmjiyuSikyuWariai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmjiyuSikyuWariai);

		parent::tearDown();
	}

}
