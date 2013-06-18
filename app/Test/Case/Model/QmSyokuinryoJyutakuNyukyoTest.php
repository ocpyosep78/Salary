<?php
App::uses('QmSyokuinryoJyutakuNyukyo', 'Model');

/**
 * QmSyokuinryoJyutakuNyukyo Test Case
 *
 */
class QmSyokuinryoJyutakuNyukyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syokuinryo_jyutaku_nyukyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyokuinryoJyutakuNyukyo = ClassRegistry::init('QmSyokuinryoJyutakuNyukyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyokuinryoJyutakuNyukyo);

		parent::tearDown();
	}

}
