<?php
App::uses('QmHyojyunHosyuGetu', 'Model');

/**
 * QmHyojyunHosyuGetu Test Case
 *
 */
class QmHyojyunHosyuGetuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_hyojyun_hosyu_getu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmHyojyunHosyuGetu = ClassRegistry::init('QmHyojyunHosyuGetu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmHyojyunHosyuGetu);

		parent::tearDown();
	}

}
