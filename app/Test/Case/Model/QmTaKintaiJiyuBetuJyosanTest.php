<?php
App::uses('QmTaKintaiJiyuBetuJyosan', 'Model');

/**
 * QmTaKintaiJiyuBetuJyosan Test Case
 *
 */
class QmTaKintaiJiyuBetuJyosanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_kintai_jiyu_betu_jyosan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaKintaiJiyuBetuJyosan = ClassRegistry::init('QmTaKintaiJiyuBetuJyosan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaKintaiJiyuBetuJyosan);

		parent::tearDown();
	}

}
